$( document ).ready(function() {
  var input;
  $('.hashtags').click(function(){
    ajaxCall();
  })

  function ajaxCall() {
     var input = $(this).text().slice(1);
      $.ajax({
        type: "GET",
        url: "/instagrams/" + input
      }).done(function(data) {
          console.log($(data));
        });
    }



});
