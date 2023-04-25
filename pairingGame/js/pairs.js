
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

var bestRound1Score;
var bestRound2Score;
var bestRound3Score;

var currentScore = 0;

//called on every card click for round 1 and round 2
function flip(elem) {
    //first flip
    if (flipped == 0) {
        flippedCards.push(elem.id); //add to array of flipped cards
        elem.style.transform = "rotateY(-180deg)"; //rotate card
        elem.style.pointerEvents = "none"; //disable card
        flipped += 1;
    //second flip
    } else if (flipped == 1) {
        flippedCards.push(elem.id); //add to array of flipped cards
        const cards = document.getElementsByClassName("card");
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.pointerEvents = "none"; //disable all cards
        }
        elem.style.transform = "rotateY(-180deg)"; //rotate card

        //compare avatar features of both cards
        var comparison = compareAvatars(flippedCards);
        if (comparison == true) { //cards match
            currentScore += 5; //correct guess increases score

            //set background color of game to gold if new best score for the round is obtained
            if (round === "round1") {
                if (currentScore > bestRound1Score) {
                    document.getElementById("round1").style.backgroundColor = "#FFD700";
                }
            } else if (round === "round2") {
                if (currentScore > bestRound2Score) {
                    document.getElementById("round2").style.backgroundColor = "#FFD700";
                }
            }

            for (var i = 0; i < cards.length; i++) {
                if (cards[i].style.transform !== "rotateY(-180deg)") {
                    cards[i].style.removeProperty("pointer-events"); //enable all cards that are not already flipped over (those not correctly guessed)
                }
            }
            totalFlipped += 2;
            //if all cards are flipped (guessed correctly)
            if (totalFlipped == flippedForRound) {
                if (round === "round1") {
                    round1Score = currentScore; //set current score as final score
                    document.getElementById("round1score").value = round1Score; //display score
                    setTimeout(function() {
                        //hide and show appropriate divs
                        let game = document.getElementById("round1");
                        game.style.display = "none";
                        let round2 = document.getElementById("round2");
                        round2.style.display = "inline-grid";

                        const cards = round2.getElementsByClassName("card");
                        for (var i = 0; i < cards.length; i++) {
                            cards[i].style.removeProperty("pointer-events"); //make all cards in round 2 clickable
                        }
                        attempts = 0;
                        //reset attempts and timer count
                        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts);
                        document.getElementById("timerCount").innerHTML = "Time left: 30";
                        round = "round2"; //declare new round
                        startTimer();
                        flippedForRound = 10;
                        currentScore = 0;
                    }, 500);
                } else if (round === "round2") {
                    round2Score = currentScore; //set current score as final score
                    document.getElementById("round2score").value = round2Score; //display score
                    setTimeout(function() {
                        //hide and show appropriate divs
                        let game = document.getElementById("round2");
                        game.style.display = "none";
                        let round3 = document.getElementById("round3");
                        round3.style.display = "inline-grid";
                        const cards = round3.getElementsByClassName("card");
                        for (var i = 0; i < cards.length; i++) {
                            cards[i].style.removeProperty("pointer-events"); //make all cards in round 3 clickable
                        }
                        attempts = 0;
                        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts);
                        document.getElementById("timerCount").innerHTML = "Time left: 30";
                        round = "round3"; //declare new round
                        startTimer();
                        flippedForRound = 12;
                        currentScore = 0;
                    }, 500);
                    currentScore = 0;
                }
            }
        } else { //cards did not match
            currentScore -= 1; //incorrect guess decrements score
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

        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts); //display new attempts count

        //if max attempts reached
        if (attempts === MAX_ATTEMPTS) {
            setTimeout(function() {
                //end of game divs shown
                let aftergame = document.getElementById("aftergame");
                let game = document.getElementById(round);
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                game.style.display = "none";
                utils.style.display = "none";

                //calculate score and display
                totalScore = round1Score + round2Score + round3Score;
                document.getElementById("score").value = totalScore;
                document.getElementById("statement").innerHTML = "Max attempts (30) reached! Score:";

                //pause music track
                let music = document.getElementById("music");
                music.pause();
            }, 500);
        }
    }
}

//called on every card click in round 3
function round3Flip(elem) {
    //first flip
    if (flipped == 0) {
        flippedCards.push(elem.id);
        elem.style.transform = "rotateY(-180deg)";
        elem.style.pointerEvents = "none";
        flipped += 1;
    //second flip
    } else if (flipped == 1) {
        flippedCards.push(elem.id);
        elem.style.transform = "rotateY(-180deg)";
        elem.style.pointerEvents = "none";
        flipped += 1;
    //third flip
    } else if (flipped == 2) {
        flippedCards.push(elem.id);
        const cards = document.getElementsByClassName("card");
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.pointerEvents = "none";
        }
        elem.style.transform = "rotateY(-180deg)";

        //compare avatar features of both cards
        var comparison = compareAvatars(flippedCards);

        if (comparison == true) { //cards match
            currentScore += 5; //correct guess increases score

            //set background color of game to gold if new best score for the round is obtained
            if (currentScore > bestRound3Score) {
                document.getElementById("round3").style.backgroundColor = "#FFD700";
            }

            for (var i = 0; i < cards.length; i++) {
                if (cards[i].style.transform !== "rotateY(-180deg)") {
                    cards[i].style.removeProperty("pointer-events"); //enable all cards that are not already flipped over (those not correctly guessed)
                }
            }
            totalFlipped += 3;
            //if all cards are flipped (guessed correctly)
            if (totalFlipped == flippedForRound) {
                round3Score = currentScore; //set current score as final
                totalScore = round1Score + round2Score + round3Score; //calculate total score and display
                document.getElementById("score").value = totalScore;
                document.getElementById("round3score").value = round3Score;
                setTimeout(function() {
                    //show end of game
                    let aftergame = document.getElementById("aftergame");
                    let game = document.getElementById(round);
                    let utils = document.getElementById("utils");
                    aftergame.style.display = "inline-block";
                    game.style.display = "none";
                    utils.style.display = "none";
                }, 500);
                currentScore = 0;

                //pause music track
                let music = document.getElementById("music");
                music.pause();
            }
        } else { //cards do not match
            currentScore -= 1; //incorrect guess decrements score
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

        document.getElementById("attemptCount").innerHTML = "Attempts left: " + (30 - attempts); //display new attempts count

        //if max attempts reached
        if (attempts === MAX_ATTEMPTS) {
            setTimeout(function() {
                //show end of game divs
                let aftergame = document.getElementById("aftergame");
                let game = document.getElementById(round);
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                game.style.display = "none";
                utils.style.display = "none";

                //calculate score and display
                totalScore = round1Score + round2Score + round3Score;
                document.getElementById("score").value = totalScore;
                document.getElementById("statement").innerHTML = "Max attempts (30) reached! Score:";

                //pause music track
                let music = document.getElementById("music");
                music.pause();
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
            skin.push(card.children[1].children[0].children[0].src.split("/").pop()); //takes string (avatar component name) after last "/" in src filename
            eyes.push(card.children[1].children[0].children[1].src.split("/").pop());
            mouth.push(card.children[1].children[0].children[2].src.split("/").pop());
        }
        //check they are all equal
        if (skin[0] == skin[1] && eyes[0] == eyes[1] && mouth[0] == mouth[1]) {
            return true;
        }
        return false;

    } else if (round === "round3") {
        for (var i = 0; i < flippedCards.length; i++) {
            let card = document.getElementById(flippedCards[i])
            skin.push(card.children[1].children[0].children[0].src.split("/").pop()); //takes string (avatar component name) after last "/" in src filename
            eyes.push(card.children[1].children[0].children[1].src.split("/").pop());
            mouth.push(card.children[1].children[0].children[2].src.split("/").pop());
        }
        //check they are all equal
        if (skin[0] == skin[1] && skin[1] == skin[2] && eyes[0] == eyes[1] && eyes[1] == eyes[2] && mouth[0] == mouth[1] && mouth[1] == mouth[2]) {
            return true;
        }
        return false;
    }
}

function restartGame() {
    location.reload(); //reloads the page
}