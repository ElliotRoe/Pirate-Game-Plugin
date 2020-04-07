addLoadEvent(function() {
  
  var title = bar_data.title;
  var progress = bar_data.progress;

  var innerBar = document.getElementsByClassName('inner-bar')[0];
  var percent = document.getElementsByClassName('percent')[0];
  var title = document.getElementsByClassName('title')[0];

  title.innerHTML = title;
  percent.innerHTML = percent;
  innerBar.style.width = percent;

});
