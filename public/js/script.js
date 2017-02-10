$(document).ready(function(){

  $("#banner").css({"height":$(window).height() + "px"});

  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if(scroll > 80){
      if(!flag){
        $("#logo").css({"margin-top": "-10px", "width": "80px", "height": "60px"});

        $("header").css({"background-color": "#12324f"});
        flag = true;
      }
    }else{
      if(flag){
        $("#logo").css({"margin-top": "220px", "width": "500px", "height": "420px"});

        $("header").css({"background-color": "transparent"});
        flag = false;
      }
    }

  });

});

$(document).ready(function(){
  $("#particles-js").css({"height":$(window).height() + "px"});
});
