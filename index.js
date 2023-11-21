let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
    menuIcon.classList.toggle(`bx-x`);
    navbar.classList.toggle(`active`);
}



// // LIEN ACCUEIL BARRE DE NAV
let lienPageAccueil = document.querySelector(".active")
// // AU CLICK DU LIEN, SCROLL VERS PAGE ACCUEIL 
lienPageAccueil.addEventListener("click", function() {
    let pageAccueil = document.querySelector("#home");
    pageAccueil.scrollIntoView({ behavior: "smooth" });
});

// // LIEN PROPOS BARRE DE NAV
let lienPageAPropos = document.querySelector(".propos")
// // AU CLICK DU LIEN, SCROLL VERS PROPOS
lienPageAPropos.addEventListener("click", function() {
    let pageAPropos = document.querySelector("#a-propos");
    pageAPropos.scrollIntoView({ behavior: "smooth" });
});  

function changeActive(link) {
    // Supprime la classe "active" de tous les liens
    var links = document.querySelectorAll('.navbar a');
    links.forEach(function (item) {
        item.classList.remove('.active');
    });

    // Ajoute la classe "active" au lien sur lequel on a cliqué
    link.classList.add('.active');
}