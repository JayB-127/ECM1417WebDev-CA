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
    <body onload="setUp()">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <?php include("navbar.php"); ?>
        <div id="main">
        <div id="startgame">
                <button type="button" onclick="showGame(); setStartTime()">Start Game...</button>
            </div>
            <div id="round1" style="display:inline-grid;">
                <div id="1.1" class="card" onclick="flip(this)">
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
                <div id="1.2" class="card" onclick="flip(this)">
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
                <div id="1.3" class="card" onclick="flip(this)">
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
                <div id="1.4" class="card" onclick="flip(this)">
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
                <div id="1.5" class="card" onclick="flip(this)">
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
                <div id="1.6" class="card" onclick="flip(this)">
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
            </div>
            <div id="round2" style="display:none;">
                <div id="2.1" class="card" onclick="flip(this)">
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
                <div id="2.2" class="card" onclick="flip(this)">
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
                <div id="2.3" class="card" onclick="flip(this)">
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
                <div id="2.4" class="card" onclick="flip(this)">
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
                <div id="2.5" class="card" onclick="flip(this)">
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
                <div id="2.6" class="card" onclick="flip(this)">
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
                <div id="2.7" class="card" onclick="flip(this)">
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
                <div id="2.8" class="card" onclick="flip(this)">
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
                <div id="2.9" class="card" onclick="flip(this)">
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
                <div id="2.10" class="card" onclick="flip(this)">
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
            <div id="round3" style="display:none;">
                <div id="3.1" class="card" onclick="round3Flip(this)">
                    <div class="cardFront">
                        <img class="questionMark" src="../assets/card/questionMark.png">
                    </div>x
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="skin primaryImg" src="">
                            <img class="eyes secondaryImg" src="">
                            <img class="mouth secondaryImg" src="">
                        </div>
                    </div>
                </div>
                <div id="3.2" class="card" onclick="round3Flip(this)">
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
                <div id="3.3" class="card" onclick="round3Flip(this)">
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
                <div id="3.4" class="card" onclick="round3Flip(this)">
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
                <div id="3.5" class="card" onclick="round3Flip(this)">
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
                <div id="3.6" class="card" onclick="round3Flip(this)">
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
                <div id="3.7" class="card" onclick="round3Flip(this)">
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
                <div id="3.8" class="card" onclick="round3Flip(this)">
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
                <div id="3.9" class="card" onclick="round3Flip(this)">
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
                <div id="3.10" class="card" onclick="round3Flip(this)">
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
                <div id="3.11" class="card" onclick="round3Flip(this)">
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
                <div id="3.12" class="card" onclick="round3Flip(this)">
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
            <div id="utils">
                <div id="timer">
                    <p id="timerCount">Time left: 30</p>
                </div>
                <div id="attempts">
                    <p id="attemptCount">Attempts left: 30</p>
                </div>
            </div>
            <?php
            if (isset($_POST["submit"])) {
                if (empty($_COOKIE["username"])) {
                    $username = "Guest";
                } else {
                    $username = $_COOKIE["username"];
                }
                $round1 = $_POST["round1score"];
                $round2 = $_POST["round2score"];
                $round3 = $_POST["round3score"];
                $score = $_POST["score"];
                $msg = $score . ", " . $round1 . ", " . $round2 . ", " . $round3 . ", " . $username . "\n";

                $content = file_get_contents("../data/leaderboard.csv");
                $lines = explode("\n", $content);

                $containsName = false;
                foreach ($lines as $line) {
                    $name = explode(", ", $line)[4];
                    if ($name == $username) {
                        $msg = $score . ", " . $round1 . ", " . $round2 . ", " . $round3 . ", " . $username;
                        $updatedContent = str_replace($line, $msg, $content);
                        file_put_contents("../data/leaderboard.csv", $updatedContent);
                        $containsName = true;
                        break;
                    }
                }

                if ($containsName === false) {
                    $updatedContent = $content . $msg;
                    file_put_contents("../data/leaderboard.csv", $updatedContent);
                }

                echo "<script>location.href='leaderboard.php';</script>";
                exit();
            }
            ?>
            <div id="aftergame" style="display:none">
                <p id="statement">You won with a score of: </p>
                <input type="text" readonly name="score" id="score" form="aftergameform">
                <hr>
                <label for="round1score">Round 1 score: </label>
                <input type="text" readonly name="round1score" id="round1score" form="aftergameform" value="0"><br>
                <label for="round2score">Round 2 score: </label>
                <input type="text" readonly name="round2score" id="round2score" form="aftergameform" value="0"><br>
                <label for="round3score">Round 3 score: </label>
                <input type="text" readonly name="round3score" id="round3score" form="aftergameform" value="0">
                <hr>
                <button type="button" onclick="restartGame()">Play again</button>
                <form id="aftergameform" method="POST">
                    <?php
                    if (isset($_SESSION["registered"])) {
                        if ($_SESSION["registered"] === true) {
                    ?>
                        <input type="submit" id="submit" name="submit" value="Submit scores"> 
                    <?php
                        } else if ($_SESSION["registered"] === false) {
                    ?>
                        <button type="button" onclick="location.href='registration.php';">Register to submit score</button>
                    <?php
                        }
                    } else {
                    ?>
                    <button type="button" onclick="location.href='registration.php';">Register to submit score</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </body>
</html>