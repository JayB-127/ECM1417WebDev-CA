
function setUp() { //ran when body loads
    let round1 = document.getElementById("round1");
    round1.style.opacity = "75%";

    const cards = document.getElementsByClassName("card");
    for (var i = 0; i < cards.length; i++) {
        cards[i].style.pointerEvents = "none"; //disable all cards
    }

    //set values for bestRoundscores by retrieving cookies
    bestRound1Score = getScoreCookie("bestRound1Score");
    bestRound2Score = getScoreCookie("bestRound2Score");
    bestRound3Score = getScoreCookie("bestRound3Score");

}

function showGame() { //when 'start game' button is clicked
    let startgame = document.getElementById("startgame");
    startgame.style.display = "none"; //hide 'start game' button

    let round1 = document.getElementById("round1");
    round1.style.removeProperty("opacity"); //show round 1

    round1Cards = ["1.1", "1.2", "1.3", "1.4", "1.5", "1.6"]; //id's of all cards in round 1
    round1Pairs = 3; //number of pairs in round 1

    round2Cards = ["2.1", "2.2", "2.3", "2.4", "2.5", "2.6", "2.7", "2.8", "2.9", "2.10"]; //id's of all cards in round 2
    round2Pairs = 5; //number of pairs in round 2

    round3Cards = ["3.1", "3.2", "3.3", "3.4", "3.5", "3.6", "3.7", "3.8", "3.9", "3.10", "3.11", "3.12"]; //id's of all cards in round 3
    round3Pairs = 4; //number of triplets in round 3

    //create random avatars for all the cards
    createAvatars(round1Cards, round1Pairs, "round1");
    createAvatars(round2Cards, round2Pairs, "round2");
    createAvatars(round3Cards, round3Pairs, "round3");

    const cards = round1.getElementsByClassName("card");
    for (var i = 0; i < cards.length; i++) {
        cards[i].style.removeProperty("pointer-events"); //make all cards in round1 clickable
    }

    startTimer();

    let music = document.getElementById("music");
    music.play();
}

function createAvatars(cards, pairs, round) {

    if (round === "round1" || round === "round2") {
        //for 2 cards, assign the same random avatar
        for (var i = 0; i < pairs; i++) {
            let features = randomFeatures(); //random features for this pair of cards

            let card1Index = Math.floor(Math.random() * cards.length);
            let card1 = cards[card1Index]; //take random card id
            cards.splice(card1Index, 1); //removes card id from array of available cards ids
            assignFeatures(card1, features); //assign this card the avatar
            let card2Index = Math.floor(Math.random() * cards.length);
            let card2 = cards[card2Index]; //take random card id
            cards.splice(card2Index, 1); //removes card id from array of available cards ids
            assignFeatures(card2, features); //assign this card the avatar
        }
    } else if (round === "round3") {
        //for 3 cards, assign the same random avatar
        for (var i = 0; i < pairs; i++) {
            let features = randomFeatures(); //random features for this triplet of cards

            let card1Index = Math.floor(Math.random() * cards.length);
            let card1 = cards[card1Index]; //take random card id
            cards.splice(card1Index, 1); //removes card id from array of available cards ids
            assignFeatures(card1, features); //assign this card the avatar
            let card2Index = Math.floor(Math.random() * cards.length);
            let card2 = cards[card2Index]; //take random card id
            cards.splice(card2Index, 1); //removes card id from array of available cards ids
            assignFeatures(card2, features); //assign this card the avatar
            let card3Index = Math.floor(Math.random() * cards.length);
            let card3 = cards[card3Index]; //take random card id
            cards.splice(card3Index, 1); //removes card id from array of available cards ids
            assignFeatures(card3, features); //assign this card the avatar
        }
    }
}

function randomFeatures() {
    //constant arrays containing all possible avatar components
    const SKIN = ["green", "red", "yellow"];
    const EYES = ["closed", "laughing", "long", "normal", "rolling", "winking"];
    const MOUTH = ["open", "sad", "smiling", "straight", "surprise", "teeth"];

    //returns random component for each skin, eyes, mouth
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

    //writes component name into the cards avatar img src
    card.children[1].children[0].children[0].src = "../assets/skin/".concat(skin, ".png");
    card.children[1].children[0].children[1].src = "../assets/eyes/".concat(eyes, ".png");
    card.children[1].children[0].children[2].src = "../assets/mouth/".concat(mouth, ".png");
}

function startTimer() {
    var game = document.getElementById(round);
    var timerCount = document.getElementById("timerCount"); //display of time left
    var count = TIME_LIMIT / 1000;
    var interval = setInterval(function() { //function repeats every 1000ms interval
        //if game is still visible (user is still playing)
        if (game.style.display !== "none") {
            count -= 1; //decrement time
            //if time limit reached
            if (count == 0) {
                clearInterval(interval); //stop function repeat
                //display necessary divs
                let aftergame = document.getElementById("aftergame");
                let utils = document.getElementById("utils");
                aftergame.style.display = "inline-block";
                utils.style.display = "none";
                game.style.display = "none";
    
                //calculate score and display on aftergame div
                totalScore = round1Score + round2Score + round3Score;
                document.getElementById("score").value = totalScore;
                document.getElementById("statement").innerHTML = "Time limit (30 secs) reached! Score:";

                //pause music track and play lose sound
                let music = document.getElementById("music");
                music.pause();
                let lose = document.getElementById("lose");
                lose.play();
            }
            timerCount.innerHTML = "Time left: " + count; //write new time left to display
        } else {
            clearInterval(interval); //stop function repeat if game is no longer visible (user stopped playing)
        }
    }, 1000);
}

//returns the value of the cookie with the name parsed into the function
function getScoreCookie(name) {
    var cookies = document.cookie.split(";"); //array of set cookies
    
    //for each cookie that is set
    for (var i = 0; i < cookies.length; i++) {
        var cookieName = cookies[i].split("=")[0];
        var cookieValue = cookies[i].split("=")[1];
        //if the cookie is the one that is wanted, return it's value
        if (cookieName.trim() == name) {
            return decodeURIComponent(cookieValue);
        }
    }

    return 0;
}