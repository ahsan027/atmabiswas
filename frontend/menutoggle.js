const menuToggle = document.getElementById("menu-toggleId");
const sideNav = document.querySelector(".sidenav");
const closeBtn = document.getElementById("close-btn");
const sideDropdowns = document.querySelectorAll(".sidenav .sidedrop");
const sideNavLinks = document.querySelectorAll(
  ".sidenav a:not(.mainsidedrop a)"
); // Select all links EXCEPT the main dropdown toggles
const body = document.body; // Get the body element
const mobileHeader = document.querySelector(".mobile-header"); // Get the mobile header element

// Function to set body padding-top based on mobile header height
function setBodyPadding() {
  if (mobileHeader && window.innerWidth <= 768) {
    const headerHeight = mobileHeader.offsetHeight; // Get the rendered height of the header
    body.style.paddingTop = headerHeight + "px";
  } else {
    body.style.paddingTop = "0";
  }
}

// Set padding on page load and resize
window.addEventListener("load", setBodyPadding);
window.addEventListener("resize", setBodyPadding);

menuToggle.addEventListener("click", () => {
  sideNav.classList.toggle("active");
  menuToggle.classList.toggle("active");
  // We no longer need to toggle sidenav-open class on body as padding is handled dynamically
});

// Close the sidenav when the close button is clicked
closeBtn.addEventListener("click", () => {
  sideNav.classList.remove("active");
  menuToggle.classList.remove("active");
  // We no longer need to remove sidenav-open class from body
});

// Prevent clicks inside the sidebar from closing it via the document listener
sideNav.addEventListener("click", (event) => {
  event.stopPropagation();
});

// Close the sidenav when clicking outside of it
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

  mainDropdown.addEventListener("click", (event) => {
    event.preventDefault(); // Prevent default link behavior
    dropdown.classList.toggle("active"); // Toggle active class on the parent .sidedrop
  });
});

// Close the sidenav when a navigation link is clicked
sideNavLinks.forEach((link) => {
  link.addEventListener("click", () => {
    sideNav.classList.remove("active");
    menuToggle.classList.remove("active");
    // We no longer need to remove sidenav-open class from body
  });
});
