window.onload = function () {

  var user_id = user_meta.user_id;
  var next_button = document.querySelector("div.wp-block-button.alignright.is-style-fill > a");
  var audioElement = document.getElementsByClassName('rewardSFX')[0];

  next_button.href = "";
  next_button.style.backgroundColor = "#818791";

  wp.api.loadPromise.done(function () {
    user = new wp.api.models.User({id: user_id});
    setTimeout(updateReward, 120000);
  });

  function updateReward() {
      next_button.style.backgroundColor = "#12499e";
      next_button.href = "https://bexleycodingcamp.com/scratch/unit-1-lesson-2/";
      window.alert("You earned 20 doubloons!");
      audioElement.play();
  }

}
