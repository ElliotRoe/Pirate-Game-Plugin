console.log("hello");

addLoadEvent(function() {

  var doubloonAmt = 20;
  var meta;
  var temp;

  var current_user;

  var user_id = user_meta.user_id;

  var next_button = document.getElementById('next')

  var audioElement = document.getElementsByClassName('rewardSFX')[0];

  next_button.style.display = "none";

  wp.api.loadPromise.done(function() {
    current_user = new wp.api.models.User({
      id: user_id
    });
    current_user.fetch().done( function () {
      meta = current_user.get("meta");
      temp = JSON.parse(meta.user_game_data);

      setTimeout(updateReward, 40000);
    });
  });

  function updateReward() {
    next_button.style.display = "inline-block";
    audioElement.volume = 0.2;
    audioElement.play();
    window.alert("You earned "+ doubloonAmt +" doubloons!");

    //changes the user's meta data
    temp.inventory.money += doubloonAmt;
    meta.user_game_data = JSON.stringify(temp);
    user.save("meta",meta);

  }

});
