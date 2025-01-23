document.addEventListener("DOMContentLoaded", function () {
  const counters = [
    { id: "number1", end: 100, duration: 2000 },
    { id: "number2", end: 200, duration: 2500 },
    { id: "number3", end: 50, duration: 3000 },
    { id: "number4", end: 300, duration: 3500 },
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
