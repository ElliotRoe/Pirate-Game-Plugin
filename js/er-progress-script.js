addLoadEvent(function() {

  var title = bar_data.title;
  var progress = bar_data.progress;

  var innerBar = document.getElementsByClassName('inner-bar')[0];
  var percent = document.getElementsByClassName('percent')[0];
  var titleText = document.getElementsByClassName('title')[0];

  var beginButton = document.getElementById('begin');

  if (progress>0) {
    beginButton.innerHTML = "Resume Course";
  } else {
    beginButton.innerHTML = "Begin Course!";
  }

  beginButton.href = bar_data.permalink;

  titleText.innerHTML = title;
  percent.innerHTML = progress + "%";
  innerBar.style.width = progress + "%";

});
