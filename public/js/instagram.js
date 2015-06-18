$( document ).ready(function() {

  $('.hashtags').click(function(){
     var input = $(this).text().slice(1);
    $.get("/instagrams/" + input, function(data, status){
      $('.instagram-feed').html(data);
    });
  })

});


// $("button").click(function(){
//     $.get("demo_test.asp", function(data, status){
//         alert("Data: " + data + "\nStatus: " + status);
//     });
// });