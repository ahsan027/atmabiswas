const menuToggle = document.getElementById("menu-toggleId");
const sideNav = document.querySelector(".sidenav");
const closeBtn = document.getElementById("close-btn");
const sideDropdowns = document.querySelectorAll(".sidenav .sidedrop");

menuToggle.addEventListener("click", () => {
  sideNav.classList.toggle("active");
  menuToggle.classList.toggle("active");
});

// Close the sidenav when the close button is clicked
closeBtn.addEventListener("click", () => {
  sideNav.classList.remove("active");
  menuToggle.classList.remove("active");
});

// Close the sidenav when clicking outside of it (optional, but good for UX)
document.addEventListener("click", (event) => {
  const isClickInsideSidenav = sideNav.contains(event.target);
  const isClickOnMenuToggle = menuToggle.contains(event.target);

  if (
    !isClickInsideSidenav &&
    !isClickOnMenuToggle &&
    sideNav.classList.contains("active")
  ) {
    sideNav.classList.remove("active");
    menuToggle.classList.remove("active");
  }
});

// Toggle dropdowns within the sidenav
sideDropdowns.forEach((dropdown) => {
  const mainDropdown = dropdown.querySelector(".mainsidedrop");
  const dropdownContent = dropdown.querySelector(".sidedropContent");

  mainDropdown.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent default link behavior
    dropdown.classList.toggle("active"); // Toggle active class on the parent .sidedrop
  });
});
