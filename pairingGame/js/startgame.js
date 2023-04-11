
function showGame() {
    //TODO: set score to 0
    let startgame = document.getElementById("startgame");
    let game = document.getElementById("game");
    startgame.style.display = "none";
    game.style.display = "inline-grid"
    createAvatars();
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
    const skin = ["green", "red", "yellow"];
    const eyes = ["closed", "laughing", "long", "normal", "rolling", "winking"];
    const mouth = ["open", "sad", "smiling", "straight", "surprise", "teeth"];

    let skinChoice = Math.floor(Math.random() * skin.length);
    let eyesChoice = Math.floor(Math.random() * eyes.length);
    let mouthChoice = Math.floor(Math.random() * mouth.length);
    return [skin[skinChoice], eyes[eyesChoice], mouth[mouthChoice]];
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

function restartGame() {
    //set score to 0
    location.reload();
}