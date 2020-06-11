var targets = document.querySelectorAll('.sense');

window.addEventListener('DOMContentLoaded', function () {
    var senses = document.querySelectorAll('.sense');
    for (var i = 0; i < senses.length; i++) {
        senses[i].addEventListener('click', hide, false);
    }
}, false);

function hide() {
    clear();
    targets = document.querySelectorAll('.sense:not(.' + CSS.escape(this.id) + ')');
    connections = document.getElementsByClassName(this.id);
    for (var i = 0; i < targets.length; i++) {
        targets[i].classList.toggle('show');

    };
    for (var i = 0; i < connections.length; i++) {
        connections[i].style.display = "inline"
    }
}


function clear() {
    links = document.getElementsByClassName('links');
    for (var i = 0; i < links.length; i++) {
        links[i].style.display = "none"
    }

}
