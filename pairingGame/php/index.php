<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>INDEX</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php include("navbar.php"); ?>
        <div id="main">
            <?php if ($_SESSION["registered"] == true) { ?>
                <div id="welcome">
                    <p>Welcome to Pairs</p>
                </div>
                <div id="playBtn">
                    <button type="button" onclick="location.href = 'pairs.php'">Click here to play</button>
                </div>
            <?php } else { ?>
                <div id="notRegistered">
                    <p>You're not using a registered session?</p><br>
                    <div>
                        <a href="registration.php">Register now</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>