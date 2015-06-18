$( document ).ready(function() {
  var input;
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
  // var $container = $('.instagram-container');
  //   $container.imagesLoaded( function() {
  //     $('.instagram-container').masonry({
  //     // options
  //     itemSelector: '.thumbnail',
  //     columnWidth: 10
  //   });
  // });
