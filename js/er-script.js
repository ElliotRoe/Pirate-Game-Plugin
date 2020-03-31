window.onload = function () {

  var current_user
  var textElement = document.querySelector("#points");

  setInterval(updateVal, 10);

  function updateVal() {
    wp.api.loadPromise.done(function () {
      current_user = new wp.api.collections.Users();
      var points = JSON.parse( current_user.fetch( { data: { id: user_meta.user_id} } ).meta.user_game_data ).inventory.money;
      textElement.innerHTML = points;
    });
  }
}
