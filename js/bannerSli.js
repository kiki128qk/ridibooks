
$(function(){
  $('#slides').lightSlider({
    item:3,
    slideMove:1,
    auto:true,
    loop:true,
    speed:400,
    width:430,
  });

  $(document).ready(function() {
    $('#rtl').lightSlider({
      item:6,
      slideMove:1,
      loop:true,
      speed:400,
      width:430,
    });
    
  });
  $(document).ready(function() {
    $('#rtl2').lightSlider({
      item:6,
      slideMove:6,
      loop:true,
      speed:400,
      width:430,
    });
    
  });
$(".lSPrev").html("<i class='fas fa-angle-left fa-2x' ></i>");
$(".lSNext").html("<i class='fas fa-angle-right fa-2x'></i>");
});



