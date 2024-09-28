package auth

import (
	"hackthehill/backend/database"

	"github.com/gofiber/fiber/v2"
	"github.com/wkirk01/AlgoeDB"
	"github.com/golang-jwt/jwt/v5"
	"golang.org/x/crypto/bcrypt"

	"time"
	"fmt"
)

func Login(c *fiber.Ctx) error {
	
	// get the data from the request body using form values
	email := c.FormValue("email")
	password := c.FormValue("password")


	db := database.GetDB()

	authenticated, err := AuthenticateUser(db, email, password)
	if err != nil || !authenticated {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"message": "Could not authenticate user",
		})
	}


	// generate jwt token
	user, err := database.FindUserByEmail(db, email)

	if err != nil {
		return c.Status(fiber.StatusInternalServerError).JSON(fiber.Map{
			"message": "Could not find user",
		})
	}

	token, err := GenerateJWT(user)

	if err != nil {
		fmt.Println(err)

	}

	return c.JSON(fiber.Map{
		"token": token,
	})
}


func GenerateJWT(user database.User) (string, error) {

	claims := jwt.MapClaims{
		"username": user["username"],
		"exp":      time.Now().Add(time.Hour * 24).Unix(),
	}

	token := jwt.NewWithClaims(jwt.SigningMethodHS256, claims)
	return token.SignedString([]byte("secret"))
}


func CheckPasswordHash(password, hash string) bool {
    err := bcrypt.CompareHashAndPassword([]byte(hash), []byte(password))
    return err == nil
}


func AuthenticateUser(db *AlgoeDB.Database, email, password string) (bool, error) {
	user, err := database.FindUserByEmail(db, email)

	if err != nil {
		return false, err
	}


	hasspassword := user["password"].(string)
	err = bcrypt.CompareHashAndPassword([]byte(hasspassword), []byte(password))

	if err != nil {
		return false, err
	}

	return true, nil
}