var flipped = 0;
var totalFlipped = 0;
var flippedCards = [];

const MAX_ATTEMPTS = 30;
const TIME_LIMIT = 30000;

var attempts = 0;
var startTime = 0;

var round = "round1";
var flippedForRound = 6;

var round1Score = 0;
var round2Score = 0;
var round3Score = 0;
var totalScore = 0;

var currentScore = 0;

function flip(elem) {
    if (flipped == 0) {
        flippedCards.push(elem.id);
        elem.style.transform = "rotateY(-180deg)";
        elem.style.pointerEvents = "none";
        flipped += 1;
    } else if (flipped == 1) {
        flippedCards.push(elem.id);
        const cards = document.getElementsByClassName("card");
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.pointerEvents = "none";
        }
        elem.style.transform = "rotateY(-180deg)";

        //compare avatar features of both cards
        var comparison = compareAvatars(flippedCards);
        if (comparison == true) {
            currentScore += 5;
            for (var i = 0; i < cards.length; i++) {
                if (cards[i].style.transform !== "rotateY(-180deg)") {
                    cards[i].style.removeProperty("pointer-events");
                }
            }
            totalFlipped += 2;
            if (totalFlipped == flippedForRound) {
                let date = new Date();
                var timeTaken = (date.getTime() - startTime);
                if (round === "round1") {
                    round1Score = currentScore + Math.floor((TIME_LIMIT - timeTaken) / 1000);
                    alert(round1Score);
                    setTimeout(function() {
                        let game = document.getElementById("round1");
                        game.style.display = "none";
                        let round2 = document.getElementById("round2");
                        round2.style.display = "inline-grid";
                        const cards = round2.getElementsByClassName("card");
                        for (var i = 0; i < cards.length; i++) {
                            cards[i].style.removeProperty("pointer-events"); //make all cards in round2 clickable
                        }
                        attempts = 0;
                        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts);
                        document.getElementById("timerCount").innerHTML = "Time left: 30";
                        round = "round2";
                        setStartTime();
                        startTimer();
                        flippedForRound = 10;
                        currentScore = 0;
                    }, 500);
                } else if (round === "round2") {
                    round2Score = currentScore + Math.floor((TIME_LIMIT - timeTaken) / 1000);
                    alert(round2Score);
                    setTimeout(function() {
                        let game = document.getElementById("round2");
                        game.style.display = "none";
                        let round3 = document.getElementById("round3");
                        round3.style.display = "inline-grid";
                        const cards = round3.getElementsByClassName("card");
                        for (var i = 0; i < cards.length; i++) {
                            cards[i].style.removeProperty("pointer-events"); //make all cards in round2 clickable
                        }
                        attempts = 0;
                        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts);
                        document.getElementById("timerCount").innerHTML = "Time left: 30";
                        round = "round3";
                        setStartTime();
                        startTimer();
                        flippedForRound = 12;
                        currentScore = 0;
                    }, 500);
                    currentScore = 0;
                }
            }
        } else {
            currentScore -= 1;
            setTimeout(function() {
                for (var i = 0; i < cards.length; i++) {
                    cards[i].style.removeProperty("transform"); //flip over all cards to front
                    cards[i].style.removeProperty("pointer-events"); //make all cards clickable
                }
            }, 500);
            totalFlipped = 0;
        }

        attempts += 1;
        flipped = 0;
        flippedCards = [];

        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts);

        if (attempts === MAX_ATTEMPTS) {
            setTimeout(function() {
                let aftergame = document.getElementById("aftergame");
                let game = document.getElementById(round);
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                game.style.display = "none";
                utils.style.display = "none";

                document.getElementById("score").value = 0;
                document.getElementById("statement").innerHTML = "Max attempts (30) reached! Score:";
            }, 500);
        }
    }
}

function round3Flip(elem) {
    if (flipped == 0) {
        flippedCards.push(elem.id);
        elem.style.transform = "rotateY(-180deg)";
        elem.style.pointerEvents = "none";
        flipped += 1;
    } else if (flipped == 1) {
        flippedCards.push(elem.id);
        elem.style.transform = "rotateY(-180deg)";
        elem.style.pointerEvents = "none";
        flipped += 1;
    } else if (flipped == 2) {
        flippedCards.push(elem.id);
        const cards = document.getElementsByClassName("card");
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.pointerEvents = "none";
        }
        elem.style.transform = "rotateY(-180deg)";

        //compare avatar features of both cards
        var comparison = compareAvatars(flippedCards);

        if (comparison == true) {
            currentScore += 5;
            for (var i = 0; i < cards.length; i++) {
                if (cards[i].style.transform !== "rotateY(-180deg)") {
                    cards[i].style.removeProperty("pointer-events");
                }
            }
            totalFlipped += 3;
            if (totalFlipped == flippedForRound) {
                let date = new Date();
                var timeTaken = (date.getTime() - startTime);
                round3Score = currentScore + Math.floor((TIME_LIMIT - timeTaken) / 1000);
                totalScore = round1Score + round2Score + round3Score;
                document.getElementById("score").value = totalScore;
                document.getElementById("round1score").value = round1Score;
                document.getElementById("round2score").value = round2Score;
                document.getElementById("round3score").value = round3Score;
                setTimeout(function() {
                    let aftergame = document.getElementById("aftergame");
                    let game = document.getElementById(round);
                    let utils = document.getElementById("utils");
                    aftergame.style.display = "inline-block";
                    game.style.display = "none";
                    utils.style.display = "none";
                }, 500);
                currentScore = 0;
            }
        } else {
            currentScore -= 1;
            setTimeout(function() {
                for (var i = 0; i < cards.length; i++) {
                    cards[i].style.removeProperty("transform"); //flip over all cards to front
                    cards[i].style.removeProperty("pointer-events"); //make all cards clickable
                }
            }, 500);
            totalFlipped = 0;
        }

        attempts += 1;
        flipped = 0;
        flippedCards = [];

        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts);

        if (attempts === MAX_ATTEMPTS) {
            setTimeout(function() {
                let aftergame = document.getElementById("aftergame");
                let game = document.getElementById(round);
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                game.style.display = "none";
                utils.style.display = "none";

                document.getElementById("score").value = 0;
                document.getElementById("statement").innerHTML = "Max attempts (30) reached! Score:";
            }, 500);
        }
    }
}

function compareAvatars(flippedCards) {
    var skin = [];
    var eyes = [];
    var mouth = [];

    if (round === "round1" || round === "round2") {
        //for the last two cards that were flipped
        for (var i = 0; i < flippedCards.length; i++) {
            let card = document.getElementById(flippedCards[i])
            skin.push(card.children[1].children[0].children[0].src.split("/").pop()); //takes string after last "/" in src filename
            eyes.push(card.children[1].children[0].children[1].src.split("/").pop());
            mouth.push(card.children[1].children[0].children[2].src.split("/").pop());
        }
        if (skin[0] == skin[1] && eyes[0] == eyes[1] && mouth[0] == mouth[1]) {
            return true;
        }
        return false;

    } else if (round === "round3") {
        for (var i = 0; i < flippedCards.length; i++) {
            let card = document.getElementById(flippedCards[i])
            skin.push(card.children[1].children[0].children[0].src.split("/").pop()); //takes string after last "/" in src filename
            eyes.push(card.children[1].children[0].children[1].src.split("/").pop());
            mouth.push(card.children[1].children[0].children[2].src.split("/").pop());
        }
        if (skin[0] == skin[1] && skin[1] == skin[2] && eyes[0] == eyes[1] && eyes[1] == eyes[2] && mouth[0] == mouth[1] && mouth[1] == mouth[2]) {
            return true;
        }
        return false;
    }
}

function setStartTime() {
    let date = new Date();
    startTime = date.getTime();   
}

function restartGame() {
    location.reload();
}