function marqueeMove () {
    var marquee = document.getElementById("actual-marquee");
    var pos = 0;
    var animInterval = setInterval(frame, 5);
    function frame () {
        if (pos == 350){
            clearInterval(animInterval);
        }
        else {
            pos++;
            marquee.style.position = "absolute";
            marquee.style.right = pos + 'px';
        }
    }
}

function changeActiveLink() {
    var currentTitle = document.title;
    if(currentTitle == "Home") {
        document.getElementById('nav-home').className += "active";
    }
    if(currentTitle == "About") {
        document.getElementById('nav-about').className += "active";
    }
    if(currentTitle == "Projects" || currentTitle == "Stock Tracking Application") {
        document.getElementById('nav-projects').className += "active";
    }
    if(currentTitle == "Resume") {
        document.getElementById('nav-resume').className += "active";
    }
}
window.onload = changeActiveLink;