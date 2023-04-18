var flipped = 0;
var totalFlipped = 0;
var flippedCards = [];

const MAX_ATTEMPTS = 30;
const TIME_LIMIT = 30000;

var attempts = 0;
var startTime = 0;
var points = 0;

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
            for (var i = 0; i < cards.length; i++) {
                if (cards[i].style.transform !== "rotateY(-180deg)") {
                    cards[i].style.removeProperty("pointer-events");
                }
            }
            totalFlipped += 2;
            if (totalFlipped == 10) {
                let date = new Date();
                var timeTaken = (date.getTime() - startTime);
                calcPoints(timeTaken, attempts);
                setTimeout(function() {
                    let aftergame = document.getElementById("aftergame");
                    let game = document.getElementById("game");
                    aftergame.style.display = "inline-block";
                    game.style.display = "none";
                }, 500);
            }
        } else {
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

        if (attempts === MAX_ATTEMPTS) {
            setTimeout(function() {
                let aftergame = document.getElementById("aftergame");
                let game = document.getElementById("game");
                aftergame.style.display = "inline-block";
                game.style.display = "none";

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
}

function setStartTime() {
    let date = new Date();
    startTime = date.getTime();   
}

function calcPoints(time, attempts) {
    points = Math.floor(100 - (time/TIME_LIMIT) * (attempts/MAX_ATTEMPTS) * 100); //formula for calculating points
    document.getElementById("score").value = points;
}

function restartGame() {
    location.reload();
}