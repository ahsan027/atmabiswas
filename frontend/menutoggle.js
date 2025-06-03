const menuToggle = document.getElementById("menu-toggleId");
const sideNav = document.querySelector(".sidenav");
const closeBtn = document.getElementById("close-btn");
const sideDropdowns = document.querySelectorAll(".sidenav .sidedrop");
const body = document.body;
const mobileHeader = document.querySelector(".mobile-header");

// Function to set body padding-top based on mobile header height
function setBodyPadding() {
  if (mobileHeader && window.innerWidth <= 768) {
    const headerHeight = mobileHeader.offsetHeight;
    body.style.paddingTop = headerHeight + "px";
  } else {
    body.style.paddingTop = "0";
  }
}

// Set padding on page load and resize
window.addEventListener("load", setBodyPadding);
window.addEventListener("resize", setBodyPadding);

// Toggle sidenav on menu button click
menuToggle.addEventListener("click", () => {
  sideNav.classList.toggle("active");
  menuToggle.classList.toggle("active");
});

// Close sidenav when close button is clicked
closeBtn.addEventListener("click", () => {
  sideNav.classList.remove("active");
  menuToggle.classList.remove("active");
});

// Prevent clicks inside sidenav from propagating
sideNav.addEventListener("click", (event) => {
  event.stopPropagation();
});

// Close sidenav when clicking outside of it
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

// Toggle dropdown menus in sidenav
sideDropdowns.forEach((dropdown) => {
  const mainDropdown = dropdown.querySelector(".mainsidedrop");

  mainDropdown.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent link navigation
    dropdown.classList.toggle("active");
  });
});

// Close sidenav only for normal nav links (not dropdowns)
sideNav.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    const isDropdownToggle = link.classList.contains("mainsidedrop");
    const isInsideDropdown = link.closest(".sidedrop");

    if (!isDropdownToggle && !isInsideDropdown) {
      sideNav.classList.remove("active");
      menuToggle.classList.remove("active");
    }
  });
});
