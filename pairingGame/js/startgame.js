
function showGame(elem) {
    removeBtn(elem);
    var game = document.createElement("div");
    game.id = "pairs";
    document.getElementById("main").appendChild(game);
}

function removeBtn(elem) {
    var element = elem;
    element.remove();
}