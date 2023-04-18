
function setUp() { //ran when body loads
    const cards = document.getElementsByClassName("card");
    for (var i = 0; i < cards.length; i++) {
        cards[i].style.pointerEvents = "none"; //disable all cards
    }
    let game = document.getElementById("game");
    game.style.opacity = "75%";
}

function showGame() {
    let startgame = document.getElementById("startgame");
    startgame.style.display = "none";

    let game = document.getElementById("game");
    game.style.removeProperty("opacity");

    createAvatars();

    const cards = document.getElementsByClassName("card");
    for (var i = 0; i < cards.length; i++) {
        cards[i].style.removeProperty("pointer-events"); //make all cards clickable
    }

    startTimer();
}

function createAvatars() {
    var cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //array of cards that do not have an avatar
    
    for (var i = 0; i < 5; i++) {
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
    var game = document.getElementById("game");
    var timerCount = document.getElementById("timerCount");
    var count = TIME_LIMIT / 1000;
    var interval = setInterval(function() {
        if (game.style.display !== "none") {
            count -= 1;
            if (count == 0) {
                clearInterval(interval);
                let aftergame = document.getElementById("aftergame");
                let game = document.getElementById("game");
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                game.style.display = "none";
                utils.style.display = "none";
    
                document.getElementById("score").value = 0;
                document.getElementById("statement").innerHTML = "Time limit (30 secs) reached! Score:";
            }
            timerCount.innerHTML = "Time left: " + count;
        } else {
            clearInterval(interval);
        }
    }, 1000);
}