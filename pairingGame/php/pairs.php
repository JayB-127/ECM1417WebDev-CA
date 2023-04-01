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
                <button type="button" onclick="showGame()">Start Game...</button>
            </div>
            <div id="game">
                <div id="" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 1 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="1" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 2 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="2" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 3 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="3" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 4 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="4" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 5 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="5" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 6 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="6" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 7 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="7" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 8 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="8" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 9 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
                <div id="9" class="card" onclick="flip(this)">
                    <div class="cardFront">
                        <h1>CARD 10 FRONT</h1>
                    </div>
                    <div class="cardBack">
                        <div class="avatar">
                            <img class="primaryImg" src="../assets/skin/green.png">
                            <img class="secondaryImg" src="../assets/eyes/closed.png">
                            <img class="secondaryImg" src="../assets/mouth/open.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>