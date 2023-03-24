<body>
    <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item" name="home">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item" name="memory">
                <a href="pairs.php" class="nav-link">Play Pairs</a>
            </li>
            <?php if($registered) { ?>
                <a class="nav-link" href="leaderboard.php" name="leaderboard">Leaderboard</a>
            <?php } else { ?>
                <a class="nav-link" href="registration.php" name="register">Register</a>
            <?php } ?>
        </ul>
    </nav>
</body>