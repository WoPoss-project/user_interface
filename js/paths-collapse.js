var targets = document.querySelectorAll('.sense,.attestation')

window.addEventListener('DOMContentLoaded', function () {
    var senses = document.querySelectorAll('.sense');
    for (var i = 0; i < senses.length; i++) {
        senses[i].addEventListener('click', hide, false);
    }
}, false);

function hide() {
targets = document.querySelectorAll('.attestation,.sense:not(.'+ CSS.escape(this.id) + ')')
    for (var i = 0; i < targets.length; i++) {
        targets[i].classList.toggle('show')

    }
}
