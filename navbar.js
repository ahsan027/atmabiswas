console.log(window.location.href);

document
  .getElementById("login-btn")
  .addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById("login-popup").classList.add("active");
  });

document.getElementById("close-popup").addEventListener("click", function () {
  document.getElementById("login-popup").classList.remove("active");
});

document.addEventListener("DOMContentLoaded", function () {
  const currentLocation = location.href;
  console.log(location.href);
  const menuItems = document.querySelectorAll(".navbar .bottom-row a");

  menuItems.forEach((item) => {
    if (item.href === currentLocation) {
      item.classList.add("active");
    }
  });
});
