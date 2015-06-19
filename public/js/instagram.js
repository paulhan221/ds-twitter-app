$( document ).ready(function() {

  var $container = $('.instagram-feed');

  $container.imagesLoaded( function() {
    $container.masonry({
      columnWidth: 10
    });
  });

  $('.hashtags').click(function(){
   $container = $('.instagram-feed');
   var input = $(this).text().slice(1);
   $.ajax({
   type: "GET",
   url: "/instagrams/" + input,
   dataType: "html",
     success: function(data) {
      $container.html(data).masonry('destroy')
     }
   }).done(function(){
      $container.imagesLoaded(function(){
        $container.masonry({
          columnWidth: 10
        })
      });
   });
  });

  // move instagram-feed with toggle
  $("#tog").click(function(){
    var toggleValue = document.getElementById("tog").checked;
    if(toggleValue == true){
      $(".instagram-feed").css("max-width","80%");
      $(".instagram-feed").animate({left: '15%'}).masonry('destroy');
      $('.instagram-feed').masonry({
        columnwidth: 10
      })
    }else{
      $(".instagram-feed").animate({left: '0%'}).masonry('destroy');
      $(".instagram-feed").css({"max-width" : "100%", "margin-left" : "4%"});
      $('.instagram-feed').masonry();
    }
  });


});
