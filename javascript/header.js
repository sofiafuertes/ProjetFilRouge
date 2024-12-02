// Get the current path from the URL (lowercased for consistency)
const currentPath = window.location.pathname.toLowerCase();

// Select all <li> elements inside .navPages
const navItems = document.querySelectorAll(".navPages li");

navItems.forEach((item) => {
    // Find the <a> tag inside each <li>
    const link = item.querySelector("a");

    // Compare the href attribute with the current path
    if (link && link.getAttribute("href").toLowerCase() === currentPath) {
        // Add the "active" class to the <li>
        item.classList.add("activePage");
    }
});

/** 
Toggles the display of the navigation menu when the hamburger menu icon is clicked.
When the hamburger menu is clicked, it toggles the display of the navigation menu
between 'flex' and 'none'.
const menuBurger - The hamburger menu icon element.
const centerNavBar - The navigation menu container element.
event click - Triggered when the hamburger menu icon is clicked.
*/
const menuBurger = document.querySelector("#hamburgerMenu");
const centerNavBar = document.querySelector(".centerNav .navPages");
// console.log(menuBurger);
// console.log(centerNavBar);

menuBurger.addEventListener("click", function () {
    if (centerNavBar.style.display === "flex") {
        centerNavBar.style.display = "none";
    } else {
        centerNavBar.style.display = "flex";
    }
});
