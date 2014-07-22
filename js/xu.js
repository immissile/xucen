$(function(){
  var $moon = $(".moon");
  var floatMoon = function(){
    $moon.animate({
      top: 23
    }, 1800, "easeInOutCubic", function(){
      $moon.animate({
        top: 25
      }, 1000, "easeOutQuad", function(){
        /*
        $moon.animate({
          top: 25
        }, 1800, "easeOutQuad");
        */
      });
    });
  };

  if($moon.length > 0){
    setInterval(function(){
      floatMoon();
    }, 4500);
  }
})
