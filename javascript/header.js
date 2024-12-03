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

/* 
Toggles the navigation menu display between 'flex' and 'none' when the hamburger icon is clicked.
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
