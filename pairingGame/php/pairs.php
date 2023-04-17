<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/pairs.css">
        <script type="text/javascript" src="../js/startgame.js"></script>
        <script type="text/javascript" src="../js/pairs.js"></script>
        <title>PAIRS</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php include("navbar.php"); ?>
        <div id="main">
            <div id="startgame">
                <button type="button" onclick="showGame(); setStartTime()">Start Game...</button>
            </div>
            <div id="game" style="display:none">
                <div id="1" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="skin primaryImg" src="">
                            <img class="eyes secondaryImg" src="">
                            <img class="mouth secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="2" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="3" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="4" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="5" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="6" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="7" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="8" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="9" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="10" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="">
                            <img class="secondaryImg" src="">
                            <img class="secondaryImg" src="">
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST["submit"])) {
                if (empty($_COOKIE["username"])) {
                    $username = "Guest";
                } else {
                    $username = $_COOKIE["username"];
                }
                $score = $_POST["score"];
                $file = fopen("../data/leaderboard.csv", "a+");


                $containsName = false;
                while (($line = fgets($file)) !== false) {
                    $name = explode(", ", $line)[0];
                    if ($name == $username) {
                        $containsName = true;
                        $msg = "username already exists in file!, [replace with new score] \n";
                        //TODO: replace line with new score
                        break;
                    }
                }

                if ($containsName === false) {
                    $msg = $username . ", " . $score . "\n";
                }

                fwrite($file, $msg);

                fclose($file);
                echo "<script>location.href='leaderboard.php';</script>";
                exit();
            }
            ?>
            <div id="aftergame" style="display:none">
                <p>You won with a score of: </p>
                <input type="text" name="score" id="score" form="aftergameform">
                <hr>
                <button type="button" onclick="restartGame()">Play again</button>
                <form id="aftergameform" method="POST">
                    <input type="submit" id="submit" name="submit" value="Submit scores">
                </form>
            </div>
        </div>
    </body>
</html>