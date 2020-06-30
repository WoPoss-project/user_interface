function modals() {
    var fieldset = document.getElementsByClassName('modal');
    for (var i = 0; i < fieldset.length; i++) {
        fieldset[i].addEventListener('click', toggle, false);
    }
}

function toggle() {
    var id = this.id;
    switch (id) {
        case "epistemic": {
            var notEpistemic = document.querySelectorAll('.sense:not(.epistemic)');
            for (var i = 0; i < notEpistemic.length; i++) {
                notEpistemic[i].classList.toggle("show")
            }
        };
            break;
        case "deontic": {
            var notDeontic = document.querySelectorAll('.sense:not(.deontic)');
            for (var i = 0; i < notDeontic.length; i++) {
                notDeontic[i].classList.toggle("show")
            }
        };
            break;
        case "dynamic": {
            var notDynamic = document.querySelectorAll('.sense:not(.dynamic)');
            for (var i = 0; i < notDynamic.length; i++) {
                notDynamic[i].classList.toggle("show")
            }
        };
            break;
    }
}

window.addEventListener('load', modals, false);
