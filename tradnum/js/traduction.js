var targets = document.querySelectorAll('[data-trad]');

window.addEventListener('DOMContentLoaded', function () {
    var lis = document.getElementsByTagName('li');
    for (var i = 0; i < lis.length; i++) {
        lis[i].addEventListener('click', highlightTrad, false);
    }
},
false);

function highlightTrad() {
    clearHighlightsTrad();
    targets = document.querySelectorAll("[data-trad=" + this.id + "]");
    for (var i = 0; i < targets.length; i++) {
        if (targets[i].dataset.trad == 'lit') {
            targets[i].style.backgroundColor = "#D4A81C";
            targets[i].style.color = "white";
        } else {
            
            if (targets[i].dataset.trad == 'mod') {
                targets[i].style.backgroundColor = "#5E4A4E";
                targets[i].style.color = "white";
            } else {
                
                if (targets[i].dataset.trad == 'adap') {
                    targets[i].style.backgroundColor = "#939D7A";
                    targets[i].style.color = "white";
                } else {
                
                if (targets[i].dataset.trad == 'emp') {
                    targets[i].style.backgroundColor = "#3e5473";
                    targets[i].style.color = "white";
                } else {
                    
                    if (targets[i].dataset.trad == 'trans') {
                        targets[i].style.backgroundColor = "#857A9D";
                        targets[i].style.color = "white";
                    } else {
                        true
                    }
                }}
            }
        }
    }
}

function clearHighlightsTrad() {
    for (var i = 0; i < targets.length; i++) {
        targets[i].style.backgroundColor = "";
        targets[i].style.color = "inherit";
    }
}