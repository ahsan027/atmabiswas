const modal = document.getElementById("modal");
const modalClose = document.querySelector(".modal-close");

document.querySelectorAll(".read-more-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const title = button.dataset.title;
    const category = button.dataset.category;
    const image = button.dataset.image;
    const content = button.dataset.content;

    document.getElementById("modalTitle").textContent = title;
    document.getElementById("modalCategory").textContent = category;
    document.getElementById("modalImage").src = image;
    document.getElementById("modalContent").innerHTML = content;

    modal.style.display = "block";
    document.body.style.overflow = "hidden";
  });
});

modalClose.addEventListener("click", () => {
  modal.style.display = "none";
  document.body.style.overflow = "auto";
});

modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
  }
});
