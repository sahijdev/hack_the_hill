<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microphone Recorder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a href="login.html">
            <button id="login-btn">Login</button>
        </a>
    </header>

    <main>
        <div id="transcript"></div>
        <div class="mic-container" id="mic-container">
            <div id="wave-container-left" class="wave-container-left hidden">
                <?php 
                    for ($i = 0; $i < 20; $i++) {
                        echo "<div class='wave' id='wave-left-${i}'></div>";
                    }
                ?>
            </div>
            <div class="button-container">
                <button id="record-btn" class="mic-btn">
                    <!-- <a href="https://www.flaticon.com/free-icons/microphone" title="microphone icons">Microphone icons created by Uniconlabs - Flaticon</a> -->
                    <img src="images/microphone.png" alt="Microphone Icon" class="mic-icon">
                </button>
            </div>
            <div id="wave-container-right" class="wave-container-right hidden">
                <?php 
                    for ($i = 0; $i < 20; $i++) {
                        echo "<div class='wave' id='wave-right-${i}'></div>";
                    }
                ?>
            </div>
        </div>
        <div id="save-recording" class="save-recording hidden">
            <div class="save-recording-content">
                <p>Do you want to save the recording?</p>
                <button id="save-btn">Save</button>
                <button id="discard-btn">Discard</button>
            </div>
        </div>
    </main>

    

    <script src="script.js"></script>
</body>
</html>