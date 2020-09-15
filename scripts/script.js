function changeActiveLink() {
    var currentTitle = document.title;
    if(currentTitle == "Home") {
        document.getElementById('nav-home').className = "nav-item active";
    }
    if(currentTitle == "About") {
        document.getElementById('nav-about').className = "nav-item active";
    }
    if(currentTitle === "Work" || currentTitle === "Stock Tracking Application") {
        document.getElementById('nav-work').className = "nav-item active"; //not giving class active as of now
    }
    if(currentTitle == "Resume") {
        document.getElementById('nav-resume').className = "nav-item active";
    }
}
window.onload = changeActiveLink;

const setNavAndFooter = () => {
    $("#nav").load("bookends/nav.html");
    $("#footer").load("bookends/footer.html");
}