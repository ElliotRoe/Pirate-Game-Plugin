addLoadEvent(function() {

  var points;
  var textElement = document.querySelector("#points");
  var coinImg = document.getElementById('coin');
  var warningElement = document.getElementById('log_in');

  var user_id = user_meta.user_id;

  if (user_meta.logged_in) {
    textElement.style.display = "block";
    coinImg.style.display = "block";
    warningElement.style.display = "none";
    wp.api.loadPromise.done(function() {
      user = new wp.api.models.User({
        id: user_id
      });
      setInterval(updateVal, 1000);
    });
  } else {
    textElement.style.display = "none";
    coinImg.style.display = "none";
    warningElement.style.display = "block";
  }

  function updateVal() {
    user.fetch().done(function() {
      textElement.innerHTML = JSON.parse(user.get("meta").user_game_data).inventory.money;
    });
  }
});
