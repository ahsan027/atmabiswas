document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("divisionSelect")
    .addEventListener("change", function () {
      const division = this.value;

      const xhr = new XMLHttpRequest();
      xhr.open("POST", "Action/filter.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onload = function () {
        if (xhr.status === 200) {
          const tablebody = document.getElementById("table-body");
          const obj = JSON.parse(xhr.responseText);
          tablebody.innerHTML = "";

          obj.forEach((element, idx) => {
            const row = document.createElement("tr");
            console.log(element.branchName);
            row.innerHTML = `<td data-label="Date">${element.branchName}</td>
                <td data-label="Order ID">${element.branchLoc}</td>
                <td data-label="Name">${element.division}</td>
                <td data-label="Price">${element.dist}</td>
                `;
            tablebody.appendChild(row);
          });
        }
      };
      xhr.send("division=" + encodeURIComponent(division));
    });

  const toggleBtn = document.getElementById("toggle-btn");
  const contactCard = document.getElementById("contact-card");

  const filterbtn = document.getElementById("filterbutton");
  const filterField = document.getElementById("filterbars");

  // Ensure the elements are available before adding event listeners
  if (toggleBtn && contactCard) {
    toggleBtn.addEventListener("click", () => {
      if (contactCard.classList.contains("active")) {
        contactCard.style.opacity = "0";
        contactCard.style.transform = "translateY(20px)";
        setTimeout(() => {
          contactCard.classList.remove("active");
        }, 500); // Matches the transition duration
      } else {
        contactCard.classList.add("active");
        setTimeout(() => {
          contactCard.style.opacity = "1";
          contactCard.style.transform = "translateY(0)";
        }, 0);
      }
    });
  }

  if (filterbtn && filterField) {
    filterbtn.addEventListener("click", () => {
      if (filterField.classList.contains("active")) {
        filterField.style.opacity = "0";
        filterField.style.transform = "translateY(20px)";
        setTimeout(() => {
          filterField.classList.remove("active");
        }, 500); // Matches the transition duration
      } else {
        filterField.classList.add("active");
        setTimeout(() => {
          filterField.style.opacity = "1";
          filterField.style.transform = "translateY(0)";
        }, 0);
      }
    });
  }
});
