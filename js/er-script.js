window.onload = function () {
  var textElement = document.querySelector("#points");

  setInterval(updateVal, 10);

  function updateVal() {
    textElement.innerHTML = user_meta.points;
  }
}
