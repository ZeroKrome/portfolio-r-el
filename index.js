let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
  menuIcon.classList.toggle(`bx-x`);
  navbar.classList.toggle(`active`);
};

// // LIEN ACCUEIL BARRE DE NAV
let lienPageAccueil = document.querySelector(".active");

function changeActive(link) {
  // Supprime la classe "active" de tous les liens
  let links = document.querySelectorAll(".navbar a");
  links.forEach(function (item) {
    item.classList.remove(".active");
  });

  // Ajoute la classe "active" au lien sur lequel on a cliqué
  link.classList.add(".active");
}
