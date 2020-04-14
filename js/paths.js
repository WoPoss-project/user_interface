var targets = document.getElementsByClassName('');

window.addEventListener('DOMContentLoaded', function () {
    var rects = document.querySelectorAll('rect,path,text')
    for (var i = 0; i < rects.length; i++) {
        rects[i].addEventListener('click', highlight, false);
    }
}, false);

function highlight() {
    clearHighlights();
    targets = document.getElementsByClassName(this.id);
    for (var i = 0; i < targets.length; i++) {
        targets[i].style.fill = '#F6D55C';
    }
}

function clearHighlights() {
    for (var i = 0; i < targets.length; i++) {
        targets[i].style.fill = 'white';
    }
}

//window.onunload=function(){return true;};