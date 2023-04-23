
function setUp() { //ran when body loads
    let round1 = document.getElementById("round1");
    round1.style.opacity = "75%";

    const cards = document.getElementsByClassName("card");
    for (var i = 0; i < cards.length; i++) {
        cards[i].style.pointerEvents = "none"; //disable all cards
    }
}

function showGame() {
    let startgame = document.getElementById("startgame");
    startgame.style.display = "none";

    let round1 = document.getElementById("round1");
    round1.style.removeProperty("opacity");

    round1Cards = ["1.1", "1.2", "1.3", "1.4", "1.5", "1.6"];
    round1Pairs = 3;

    round2Cards = ["2.1", "2.2", "2.3", "2.4", "2.5", "2.6", "2.7", "2.8", "2.9", "2.10"];
    round2Pairs = 5;

    round3Cards = ["3.1", "3.2", "3.3", "3.4", "3.5", "3.6", "3.7", "3.8", "3.9", "3.10", "3.11", "3.12"];
    round3Pairs = 4; //4 lots of 3

    createAvatars(round1Cards, round1Pairs, "round1");
    createAvatars(round2Cards, round2Pairs, "round2");
    createAvatars(round3Cards, round3Pairs, "round3");

    const cards = round1.getElementsByClassName("card");
    for (var i = 0; i < cards.length; i++) {
        cards[i].style.removeProperty("pointer-events"); //make all cards in round1 clickable
    }

    startTimer();
}

function createAvatars(cards, pairs, round) {

    if (round === "round1" || round === "round2") {
        for (var i = 0; i < pairs; i++) {
            let features = randomFeatures(); //random features for this pair of cards
            let card1Index = Math.floor(Math.random() * cards.length);
            let card1 = cards[card1Index];
            cards.splice(card1Index, 1); //removes card from array of available cards
            assignFeatures(card1, features);
            let card2Index = Math.floor(Math.random() * cards.length);
            let card2 = cards[card2Index];
            cards.splice(card2Index, 1); //removes card from array of available cards
            assignFeatures(card2, features);
        }
    } else if (round === "round3") {
        for (var i = 0; i < pairs; i++) {
            let features = randomFeatures(); //random features for this pair of cards
            let card1Index = Math.floor(Math.random() * cards.length);
            let card1 = cards[card1Index];
            cards.splice(card1Index, 1); //removes card from array of available cards
            assignFeatures(card1, features);
            let card2Index = Math.floor(Math.random() * cards.length);
            let card2 = cards[card2Index];
            cards.splice(card2Index, 1); //removes card from array of available cards
            assignFeatures(card2, features);
            let card3Index = Math.floor(Math.random() * cards.length);
            let card3 = cards[card3Index];
            cards.splice(card3Index, 1);
            assignFeatures(card3, features);
        }
    }
}

function randomFeatures() {
    const SKIN = ["green", "red", "yellow"];
    const EYES = ["closed", "laughing", "long", "normal", "rolling", "winking"];
    const MOUTH = ["open", "sad", "smiling", "straight", "surprise", "teeth"];

    let skinChoice = Math.floor(Math.random() * SKIN.length);
    let eyesChoice = Math.floor(Math.random() * EYES.length);
    let mouthChoice = Math.floor(Math.random() * MOUTH.length);
    return [SKIN[skinChoice], EYES[eyesChoice], MOUTH[mouthChoice]];
}

function assignFeatures(cardId, features) {
    let card = document.getElementById(cardId);
    
    let skin = features[0];
    let eyes = features[1];
    let mouth = features[2];

    card.children[1].children[0].children[0].src = "../assets/skin/".concat(skin, ".png");
    card.children[1].children[0].children[1].src = "../assets/eyes/".concat(eyes, ".png");
    card.children[1].children[0].children[2].src = "../assets/mouth/".concat(mouth, ".png");
}

function startTimer() {
    var game = document.getElementById(round);
    var timerCount = document.getElementById("timerCount");
    var count = TIME_LIMIT / 1000;
    var interval = setInterval(function() {
        if (game.style.display !== "none") {
            count -= 1;
            if (count == 0) {
                clearInterval(interval);
                let aftergame = document.getElementById("aftergame");
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                utils.style.display = "none";
                game.style.display = "none";
    
                totalScore = round1Score + round2Score + round3Score;
                document.getElementById("score").value = totalScore;
                document.getElementById("statement").innerHTML = "Time limit (30 secs) reached! Score:";
            }
            timerCount.innerHTML = "Time left: " + count;
        } else {
            clearInterval(interval);
        }
    }, 1000);
}