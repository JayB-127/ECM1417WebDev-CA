<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>REGISTRATION</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php include("navbar.php"); ?>
        <div id="main">
            <p>REGISTRATION PAGE</p>
            <form action="">
                <label for="username">Username:</label><br>
                <input type="text" name="username"><br>

                <label>Avatar Selection:</label><br>
                
                <label class="avatar">
                    <input class="avatarRadio" type="radio" name="avatar-skin">
                    <img src="../assets/skin/green.png" alt="skin-green">                   
                </label>
                <label class="avatar">
                    <input class="avatarRadio" type="radio" name="avatar-skin">
                    <img src="../assets/skin/red.png" alt="skin-red">
                </label>
                <label class="avatar">
                    <input class="avatarRadio" type="radio" name="avatar-skin">
                    <img src="../assets/skin/yellow.png" alt="skin-yellow">
                </label>
                <br>
                <label>
                    <input class="avatarRadio" type="radio">
                </label>

            </form>
        </div>
    </body>
</html>