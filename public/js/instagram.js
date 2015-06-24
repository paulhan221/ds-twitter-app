$( document ).ready(function() {

  // variables
  var $hashtags = $('.hashtags');
  var $hashtagsCount = $hashtags.size();
  var $container = $('.instagram-feed');
  var $time = 5000;

  // initialize masonry on page load
  $container.imagesLoaded( function() {
    $container.masonry({
      columnWidth: 10
    });
  });

  // reinitialize masonry with each ajax call
  $('.hashtags').click(function(){
   $container = $('.instagram-feed');
   var input = $(this).text().slice(1);
   $(".hashtagTitle").html("");
   $(".hashtagTitle").append("#"+input);

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

  // iterate through hashtags, click on each hashtag
  function clickHashtags(){
    $.each($hashtags, function(index, hashtag){
      setTimeout(function(){
        $(hashtag).trigger('click');
        $("html, body").animate({ scrollTop: $(document).height() }, 21000);

   $('html, body').animate({scrollTop:0}, 1000);

      }, $time)
      $time += 25000;
    });
  }

  // infinite loop
  setInterval(function(){clickHashtags();}, 1000);


});
