/** Toggles the display of the navigation menu when the hamburger menu icon is clicked.
This script selects the hamburger menu element and the navigation menu container.
When the hamburger menu is clicked, it changes the display of the navigation menu
between 'flex' and 'none'.

menuBurger - The hamburger menu icon element.
centerNavBar - The navigation menu container element.
event click - Triggered when the hamburger menu icon is clicked. */
const menuBurger = document.querySelector("#hamburgerMenu");
const centerNavBar = document.querySelector(".centerNav .navPages");
console.log(menuBurger);
console.log(centerNavBar);

menuBurger.addEventListener("click", function () {
    if (centerNavBar.style.display === "flex") {
        centerNavBar.style.display = "none";
    } else {
        centerNavBar.style.display = "flex";
    }
});