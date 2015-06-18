$( document ).ready(function() {

  $('.hashtags').click(function(){
    var input = $(this).text().slice(1);
    $.get("/instagrams/"+ input, function(data, response){
      $(".instagram-feed").html(data);

    })
  })

  $("#tog").click(function(){
    var toggleValue = document.getElementById("tog").checked;
    if(toggleValue == true){
      $(".instagram-feed").animate({left: '278px'});
    }else{
      $(".instagram-feed").animate({left: '0px'});
    }
  })

});
