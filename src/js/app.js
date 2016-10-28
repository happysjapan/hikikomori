$(document).foundation();

$(document).ready(function(){

  $('#nav_button').click(function(){
    $('#navigation').toggleClass('active');
  });

  $('.button__toggle').each(function(){
    $(this).click(function(){
      $(this).parent().prev().toggleClass('show');

      $(this).toggleClass('open');
      $(this).html(function(i, text){
          return text === "+" ? "▲ 閉じる" : "+";
      })

    });
  });

  /*
  ** checker
  */
  $("#checker").submit(function(e) {
    e.preventDefault();

    var url = "http://fuansoudan.com/wp-content/themes/happys/includes/check-form.php";
    // var url = "http://localhost:8888/HAPPYS/hikikomori/wp/wp-content/themes/happys/includes/check-form.php";
    var data = $("#checker").serialize();

      $.ajax({
        type: "POST",
        url: url,
        data: data
      })
      .done(function( data ) {
        // $("#checker").hide();
        $("#js_checker").show();
        $("#js_checker--inner").html(data);
      });

  });

  $('#js_checker--over').click(function(){
    $("#js_checker").hide();
  });
  $('#js_checker--close').click(function(){
    $("#js_checker").hide();
  });


  $('#searchCat').change(function(){
    var region = $(this).val();
    var action = $('#search_form').attr('data-url')+region;

    $('#search_form').attr('action', action);
  });

});
