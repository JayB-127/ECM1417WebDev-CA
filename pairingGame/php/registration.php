<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/avatar.js"></script>
        <title>REGISTRATION</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php include("navbar.php"); ?>
        <div id="main">
            <div id="form">
                <p>Registration</p>
                <form action="">
                    <hr>
                    <label for="username">Username:</label><br>
                    <input type="text" name="username"><br>
                    <hr>
                    <label>Avatar Selection:</label><br><br>
                    <!-- avatar skin -->
                    <label class="avatarPart">
                        <input type="radio" name="avatar-skin" onclick="displaySkin('green')" checked="true">
                        <img src="../assets/skin/green.png" alt="skin-green">                   
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-skin" onclick="displaySkin('red')">
                        <img src="../assets/skin/red.png" alt="skin-red">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-skin" onclick="displaySkin('yellow')">
                        <img src="../assets/skin/yellow.png" alt="skin-yellow">
                    </label>
                    <hr class="avatarhr">
                    <!-- avatar eyes -->
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" onclick="displayEyes('closed')" checked="true">
                        <img src="../assets/eyes/closed.png" alt="eyes-closed">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" onclick="displayEyes('laughing')">
                        <img src="../assets/eyes/laughing.png" alt="eyes-laughing">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" onclick="displayEyes('long')">
                        <img src="../assets/eyes/long.png" alt="eyes-long">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" onclick="displayEyes('normal')">
                        <img src="../assets/eyes/normal.png" alt="eyes-normal">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" onclick="displayEyes('rolling')">
                        <img src="../assets/eyes/rolling.png" alt="eyes-rolling">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" onclick="displayEyes('winking')">
                        <img src="../assets/eyes/winking.png" alt="eyes-winking">
                    </label>
                    <hr class="avatarhr">
                    <!-- avatar mouth -->
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" onclick="displayMouth('open')" checked="true">
                        <img src="../assets/mouth/open.png" alt="mouth-open">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" onclick="displayMouth('sad')">
                        <img src="../assets/mouth/sad.png" alt="mouth-sad">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" onclick="displayMouth('smiling')">
                        <img src="../assets/mouth/smiling.png" alt="mouth-smiling">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" onclick="displayMouth('straight')">
                        <img src="../assets/mouth/straight.png" alt="mouth-straight">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" onclick="displayMouth('surprise')">
                        <img src="../assets/mouth/surprise.png" alt="mouth-surprise">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" onclick="displayMouth('teeth')">
                        <img src="../assets/mouth/teeth.png" alt="mouth-teeth">
                    </label>
                    <hr class="avatarhr">
                    <div id="avatar">
                        <img id="skinImg" class="primaryImg" src="../assets/skin/green.png">
                        <img id="eyesImg" class="secondaryImg" src="../assets/eyes/closed.png">
                        <img id="mouthImg" class="secondaryImg" src="../assets/mouth/open.png">
                    </div>
                    <hr>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </body>
</html>