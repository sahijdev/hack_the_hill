<!-- https://freefrontend.com/css-login-forms/#google_vignette -->
<!DOCTYPE html>
<html>
<head>
	<title>Onboarding</title>
	<link rel="stylesheet" type="text/css" href="css/onboarding.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="signup">
			<form action="index.php">
				<h2 for="chk" aria-hidden="true">Onboarding</h2>
				<label for="q1">Question 1?</label>
                <textarea name="q1" required="" rows="4"></textarea>
				<label for="q2">Question 2?</label>
                <textarea name="q2" required="" rows="4"></textarea>
                <label for="q3">Question 3?</label>
                <textarea name="q3" required="" rows="4"></textarea>
                <label for="q4">Question 4?</label>
                <textarea name="q4" required="" rows="4"></textarea>
                <label for="q5">Question 5?</label>
                <textarea name="q5" required="" rows="4"></textarea>
                <label for="q6">Question 6?</label>
                <textarea name="q6" required="" rows="4"></textarea>
                <button>Submit</button>
			</form>
		</div>
	</div>
</body>
</html>