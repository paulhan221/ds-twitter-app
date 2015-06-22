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

  // iterate through hashtags, click on each hashtag, infinite loop

  function clickHashtags(){
    $.each($hashtags, function(index, hashtag){
      setTimeout(function(){ $(hashtag).trigger('click')}, $time) 
      $time += 7000;
    });
  }

  // function infiniteLoop(){
  //   setInterval(clickHashtags(), 10000);
  // }

  // function clickElement(element){
  //   $(element).trigger('click').delay(5000);
  // }

  setInterval(function(){clickHashtags();}, 1000);


  // $('#hashtag-input').keypress(function (e) {
  //  var key = e.which;
  //  if(key == 13)  // the enter key code
  //   {
  //     event.preventDefault();
  //     var hashtag = $("#hashtag-input").val();
  //
  //     $.ajax({
  //     type: "GET",
  //     url: "/instagrams/" + hashtag,
  //     dataType: "html",
  //       success: function(data) {
  //        $container.html(data).masonry('destroy')
  //       }
  //     }).done(function(){
  //        $container.imagesLoaded(function(){
  //          $container.masonry({
  //            columnWidth: 10
  //          })
  //        });
  //     });
  //   }
  // });


});
