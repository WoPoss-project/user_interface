var targets = document.getElementsByClassName(''); 

window.addEventListener('DOMContentLoaded', function () {
  var spans = document.getElementsByTagName('span');
  for (var i = 0; i < spans.length; i++) {
    spans[i].addEventListener('mouseover', highlight, false);
  }
}, false);

function highlight() {
  clearHighlights();
  targets = document.getElementsByClassName(this.className)
  for (var i = 0; i < targets.length; i++) {
    targets[i].style.textDecoration = "underline";
    targets[i].style.textDecorationStyle = "double";
        if (targets[i].dataset.trad == 'lit') {
        targets[i].style.backgroundColor = "#D4A81C";
        targets[i].style.color = "white";
    }
     if (targets[i].dataset.trad == 'mod') {
        targets[i].style.backgroundColor = "#5E4A4E";
        targets[i].style.color = "white";
    }
   
        if (targets[i].dataset.trad == 'adap') {
        targets[i].style.backgroundColor = "#939D7A";
        targets[i].style.color = "white";
    }
    
         if (targets[i].dataset.trad == 'trans') {
        targets[i].style.backgroundColor = "#857A9D";
        targets[i].style.color = "white";
    }
      if (targets[i].dataset.trad == 'emp') {
        targets[i].style.backgroundColor = "#3e5473";
        targets[i].style.color = "white";
    }
   
    
  }
}

function clearHighlights() {
  for (var i = 0; i < targets.length; i++) {
    targets[i].style.textDecoration = "none";
    targets[i].style.textDecorationStyle = "none";
    targets[i].style.backgroundColor = "";
    targets[i].style.color = "inherit";
  }
}

window.onunload=function(){return true;};

