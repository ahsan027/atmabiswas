const btn = document.getElementById("menu-toggleId");
const closebtn = document.getElementById("close-btn");
btn.addEventListener("click", () => {
  const sidebar = document.querySelector(".sidenav");

  if (sidebar.classList.contains("active")) {
    sidebar.classList.remove("active");
    console.log("Active");
  } else {
    sidebar.classList.add("active");
    console.log("Not active");
  }
});

closebtn.addEventListener("click", () => {
  const sidebar = document.querySelector(".sidenav");

  sidebar.classList.remove("active");
});

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".sidedrop .mainsidedrop").forEach((data) => {
    data.addEventListener("click", function () {
      this.parentElement.classList.toggle("active");
      console.log(this, "this");
    });
  });
});
