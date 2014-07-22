$(function(){
  var $moon = $(".moon");
  var floatMoon = function(){
    $moon.animate({
      top: 23
    }, 1000, function(){
      $moon.animate({
        top: 25
      }, 1000);
    });
  };

  if($moon.length > 0){
    setTimeout(function(){
      setInterval(function(){
        floatMoon();
      }, 4000);
    }, 2000);
  }
})
