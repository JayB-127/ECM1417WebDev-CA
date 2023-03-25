<?php session_start() ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <div class="justify-content-start">
                <ul class="navbar-nav">
                    <li class="nav-item me-auto" name="home">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item" name="memory">
                        <a class="nav-link" href="pairs.php">Play Pairs</a>
                    </li>
                    <?php
                    if (isset($_SESSION["registered"])) {
                        if ($_SESSION["registered"] === true) {
                    ?>
                        <li class="nav-item" name="leaderboard">
                            <a class="nav-link" href="leaderboard.php" name="leaderboard">Leaderboard</a>
                        </li>
                        <!-- TODO: show user profile pic -->
                    <?php
                        } else if ($_SESSION["registered"] === false) {
                    ?>
                        <li class="nav-item" name="leaderboard">
                            <a class="nav-link" href="registration.php" name="register">Register</a>
                        </li>
                    <?php
                        }
                    } else {
                        $_SESSION["registered"] = false;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</body>