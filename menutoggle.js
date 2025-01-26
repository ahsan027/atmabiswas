const menuToggle = document.getElementById("menu-toggle");
const navMenu = document.getElementById("nav-menu");

menuToggle.addEventListener("click", () => {
  menuToggle.classList.toggle("active"); // Toggle the hamburger-cross animation
  navMenu.classList.toggle("active"); // Show or hide the menu
});
