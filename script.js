function changeActiveLink() {
    var currentTitle = document.title;
    if(currentTitle == "Home") {
        document.getElementById('nav-home').className += "active";
    }
    if(currentTitle == "About") {
        document.getElementById('nav-about').className += "active";
    }
    if(currentTitle === "Work" || currentTitle === "Stock Tracking Application") {
        document.getElementById('nav-work').className += "active"; //not giving class active as of now
    }
    if(currentTitle == "Resume") {
        document.getElementById('nav-resume').className += "active";
    }
}
window.onload = changeActiveLink;