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
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $invalidMsg = "";
                if (empty($_POST["username"])) {
                    $invalidMsg = "*username cannot be empty";
                } else if (preg_match("/[\"!@#%&^*()+=\]\}\{\['<>?\/]/", $_POST["username"]) == true) {
                    $invalidMsg = "*username cannot contain: \"!@#%&^*()+={}-;:]['<>?/";
                } else {
                    setcookie("username", $_POST["username"]);
                    setcookie("skin", $_POST["avatar-skin"]);
                    setcookie("eyes", $_POST["avatar-eyes"]);
                    setcookie("mouth", $_POST["avatar-mouth"]);
                    $_SESSION["registered"] = true;
                }
                //store username and avatar in cookies
                //direct to index.php
            }
            ?>
            <div id="form">
                <p>Registration</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <hr>
                    <label for="username">Username:</label><br>
                    <input type="text" name="username" placeholder="Type username here..."><br>
                    <span id="invalidMsg"><?php echo $invalidMsg ?></span>
                    <hr>
                    <label>Avatar Selection:</label><br><br>
                    <!-- avatar skin -->
                    <label class="avatarPart">
                        <input type="radio" name="avatar-skin" value="../assets/skin/green.png" onclick="displaySkin('green')" checked="true">
                        <img src="../assets/skin/green.png" alt="skin-green">                   
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-skin" value="../assets/skin/red.png" onclick="displaySkin('red')">
                        <img src="../assets/skin/red.png" alt="skin-red">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-skin" value="../assets/skin/yellow.png" onclick="displaySkin('yellow')">
                        <img src="../assets/skin/yellow.png" alt="skin-yellow">
                    </label>
                    <hr class="avatarhr">
                    <!-- avatar eyes -->
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" value="../assets/eyes/closed.png" onclick="displayEyes('closed')" checked="true">
                        <img src="../assets/eyes/closed.png" alt="eyes-closed">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" value="../assets/eyes/laughing.png" onclick="displayEyes('laughing')">
                        <img src="../assets/eyes/laughing.png" alt="eyes-laughing">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" value="../assets/eyes/long.png" onclick="displayEyes('long')">
                        <img src="../assets/eyes/long.png" alt="eyes-long">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" value="../assets/eyes/normal.png" onclick="displayEyes('normal')">
                        <img src="../assets/eyes/normal.png" alt="eyes-normal">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" value="../assets/eyes/rolling.png" onclick="displayEyes('rolling')">
                        <img src="../assets/eyes/rolling.png" alt="eyes-rolling">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-eyes" value="../assets/eyes/winking.png" onclick="displayEyes('winking')">
                        <img src="../assets/eyes/winking.png" alt="eyes-winking">
                    </label>
                    <hr class="avatarhr">
                    <!-- avatar mouth -->
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" value="../assets/mouth/open.png" onclick="displayMouth('open')" checked="true">
                        <img src="../assets/mouth/open.png" alt="mouth-open">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" value="../assets/mouth/sad.png" onclick="displayMouth('sad')">
                        <img src="../assets/mouth/sad.png" alt="mouth-sad">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" value="../assets/mouth/smiling.png" onclick="displayMouth('smiling')">
                        <img src="../assets/mouth/smiling.png" alt="mouth-smiling">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" value="../assets/mouth/straight.png" onclick="displayMouth('straight')">
                        <img src="../assets/mouth/straight.png" alt="mouth-straight">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" value="../assets/mouth/surprise.png" onclick="displayMouth('surprise')">
                        <img src="../assets/mouth/surprise.png" alt="mouth-surprise">
                    </label>
                    <label class="avatarPart">
                        <input type="radio" name="avatar-mouth" value="../assets/mouth/teeth.png" onclick="displayMouth('teeth')">
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