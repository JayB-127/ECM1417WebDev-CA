var flipped = 0;

function flip(elem) {
    if (flipped == 0) { //no cards flipped
        elem.style.transform = "rotateY(-180deg)"; //flip card
        elem.style.pointerEvents = "none"; //disable clicks on this card
        flipped += 1;
    } else if (flipped == 1) { //one card flipped
        const cards = document.getElementsByClassName("card"); //list of all cards
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.pointerEvents = "none"; //disable clicks on every card
        }
        elem.style.transform = "rotateY(-180deg)"; //flip card
        setTimeout(function() { //after waiting 500ms
            for (var j = 0; j < cards.length; j++) {
                cards[j].style.removeProperty("transform"); //unflip every card
                cards[j].style.removeProperty("pointer-events"); //enable clicks on every card
            }
        }, 500);
        flipped = 0; //reset flipped card count
    }
}