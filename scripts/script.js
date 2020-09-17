var initialize = () => {
    setNavAndFooter();
}

var setNavAndFooter = () => {
    $("#nav").load("bookends/nav.html", changeActiveLink);
    $("#footer").load("bookends/footer.html", changeActiveLink);
}

var changeActiveLink = () => {
    var currentTitle = document.title;
    if (currentTitle.includes("Home")) document.getElementById('nav-home').className = "nav-item active";
    else if (currentTitle.includes("About")) document.getElementById('nav-about').className = "nav-item active";
    else if (currentTitle.includes("Work")) document.getElementById('nav-work').className = "nav-item active";
    else if (currentTitle.includes("Resume")) document.getElementById('nav-resume').className = "nav-item active";
}