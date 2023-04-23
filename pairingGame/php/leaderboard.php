<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/leaderboard.css">
        <title>LEADERBOARD</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php include("navbar.php"); ?>
        <div id="main">
            <div id="leaderboard">
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Round 1</th>
                        <th>Round 2</th>
                        <th>Round 3</th>
                        <th>Total Score</th>
                    </tr>
                    <?php
                    $file = fopen("../data/leaderboard.csv", "r");

                    $content = file_get_contents("../data/leaderboard.csv");
                    $lines = explode("\n", $content);
                    arsort($lines); //TODO: SORT NOT WORKING
                    $updatedContent = implode("\n", $lines);
                    file_put_contents("../data/leaderboard.csv", $updatedContent);

                    while (($line = fgets($file)) !== false) {
                        $strings = explode(", ", $line);
                        echo "<tr><td>$strings[4]</td><td>$strings[1]</td><td>$strings[2]</td><td>$strings[3]</td><td>$strings[0]</td><tr>";
                    }
                    fclose($file);
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>