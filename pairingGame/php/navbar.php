<body>
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item" name="home">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item" name="memory">
                <a class="nav-link" href="pairs.php">Play Pairs</a>
            </li>
            <?php if($registered) { ?>
                <li class="nav-item" name="leaderboard">
                    <a class="nav-link" href="leaderboard.php" name="leaderboard">Leaderboard</a>
                </li>
            <?php } else { ?>
                <li class="nav-item" name="leaderboard">
                    <a class="nav-link" href="registration.php" name="register">Register</a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</body>