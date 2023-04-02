var flipped = 0;


function flip(elem) {
    if (flipped == 0) {
        elem.style.transform = "rotateY(-180deg)";
        elem.style.pointerEvents = "none";
        flipped += 1;

    } else if (flipped == 1) {
        const cards = document.getElementsByClassName("card");
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.pointerEvents = "none";
        }
        elem.style.transform = "rotateY(-180deg)";

        var skin = [];
        var eyes = [];
        var mouth = [];
        //for every flipped card (2)
        for (var i = 0; i < cards.length; i++) {
            if (cards[i].style.transform == "rotateY(-180deg)") {
                let card = document.getElementById(cards[i].id)
                skin.push(card.children[1].children[0].children[0].src.split("/").pop()); //takes string after last "/" in src
                eyes.push(card.children[1].children[0].children[1].src.split("/").pop());
                mouth.push(card.children[1].children[0].children[2].src.split("/").pop());
            }
        }

        if (skin[0] == skin[1] && eyes[0] == eyes[1] && mouth[0] == mouth[1]) {
            for (var i = 0; i < cards.length; i++) {
                if (cards[i].style.transform !== "rotateY(-180deg)") {
                    cards[i].style.removeProperty("pointer-events");
                }
            }
        } else {
            setTimeout(function() {
                for (var i = 0; i < cards.length; i++) {
                    cards[i].style.removeProperty("transform"); //flip over all cards to front
                    cards[i].style.removeProperty("pointer-events"); //make all cards clickable
                }
            }, 500);
        }
        flipped = 0;
    }
}