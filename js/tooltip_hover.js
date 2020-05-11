function tooltipHover() {
    var senseBoxes = document.querySelectorAll('[data-attest]');
    for (var i = 0; i < senseBoxes.length; i++) {
        senseBoxes[i].addEventListener('mouseover', popUp, false);
    }
}


function popUp(event) {
    if (!this.dataset.identifier) {
        var overlay = document.createElement("div");
        var x = event.pageX;
        var y = event.pageY;
        var random = "n" + Math.random();

        this.dataset.identifier = random;
        if (this.dataset.attest) {
            overlay.innerHTML = this.dataset.attest;
        }
        overlay.style.backgroundColor = "black";
        overlay.style.position = "absolute";
        overlay.style.left = x + "px";
        overlay.style.top = y + "px";
        overlay.style.border = "1px solid #333";
        overlay.style.borderWidth = "2px";
        overlay.style.color = "white";
        overlay.style.width = "300px"
        overlay.style.fontSize = "11pt";
        overlay.style.margin = "0";
        overlay.style.padding = ".5em";
        overlay.dataset.pointer = random;
        overlay.addEventListener('mouseleave', eliminate, false);
        document.body.appendChild(overlay);
    }
}

function eliminate() {
    var tooltip = document.querySelectorAll("[data-identifier='"+ CSS.escape(this.dataset.pointer) + "']")[0];
    tooltip.removeAttribute("data-identifier");
    document.body.removeChild(this);

}


window.addEventListener('load', tooltipHover, false);