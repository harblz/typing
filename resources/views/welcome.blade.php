<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Typing Practice</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

          <div class="container" style="width: 100%; height:100%;">
          <textarea id="typed" style="width:50%;height:25%;"></textarea><br />
          <div class="balloon"></div>
          <div class="balloon"></div>
          <div class="balloon"></div>
          <div class="balloon"></div>
          <div class="balloon"></div>
          </div>
        </div>
    </body>
    <script>
    $("#typed").keyup(function() {
      var thought = $("#typed").val();
      if(checkIfCorrect() == true) {
        console.log(true);
        document.getElementById("typed").color = 'green';
        $("#typed").fadeOut();
        $('.balloon').each(function(i, elem) {
          $(elem).css('display','inline-block');
        });
        setTimeout(function() {
          window.location.replace("https://www.youtube.com/watch?v=slMub4NtrSk?autoplay=1");
        }, 3000);
      } else {
        console.log(false);
      }
    });

    function checkIfCorrect() {
      if($("#typed").val() == 'mo') {
        return true;
      } else {
        return false;
      }
    }
    </script>
</html>
