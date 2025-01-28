console.log("Hi");

window.onload = function () {
  getData();
  console.log("Hi");
};
function getData() {
  axios
    .get("locations.json")
    .then((response) =>
      response.data.forEach((element, i) => {
        console.log(i + 1, element.code);
      })
    )
    .catch((e) => console.log(e));
}
