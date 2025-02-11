document.querySelector(".menu-toggle").addEventListener("click", function () {
  document.querySelector(".bottom-row").classList.toggle("active");
});

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
  const counters = [
    { id: "number1", end: 33, duration: 3000 },
    { id: "number2", end: 40, duration: 3000 },
    { id: "number3", end: 2000000, duration: 7500 },
    { id: "number4", end: 145, duration: 7000 },
  ];

  counters.forEach((counter) => {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min(
        (timestamp - startTimestamp) / counter.duration,
        1
      );
      document.getElementById(counter.id).innerText = Math.floor(
        progress * counter.end
      );
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  });
});

const moreid = document.getElementById("moreidbtn");

moreid.addEventListener("click", () => {
  console.log("Clicked");
  const btns = document.querySelector(".secbtns");
  if (btns.classList.contains("moreactive")) {
    btns.classList.remove("moreactive");
  } else {
    btns.classList.add("moreactive");
  }
});
