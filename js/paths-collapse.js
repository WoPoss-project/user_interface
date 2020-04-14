var targets = document.getElementsByClassName('sense')

window.addEventListener('DOMContentLoaded', function () {
    var rects = document.querySelectorAll('rect,path,text');
    for (var i = 0; i < rects.length; i++) {
        rects[i].addEventListener('click', hide, false);
    }
}, false);

function hide() {
targets = document.querySelectorAll('.sense:not(.'+ CSS.escape(this.id) + ')')
    for (var i = 0; i < targets.length; i++) {

        targets[i].classList.toggle('show')

    }
}


//window.onunload=function(){return true;};