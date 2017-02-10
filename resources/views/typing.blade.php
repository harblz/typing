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
          <div class="customURL"><input id="customURL" type="url" placeholder="copy/paste a youtube link here if you want something besides move-it move-it :)"></div>
          <img src="/img/fun.jpg" class="preview"><textarea id="typed" style="width:50%;height:25%;" placeholder="mo"></textarea><br />
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
        var url = $("#customURL").val();
        console.log(url);
        setTimeout(function() {
          if(url == '') {
            url = 'https://www.youtube.com/watch?v=slMub4NtrSk?autoplay=1';
          }
          window.location.replace(url);
        }, 3000);
      } else {
        console.log(false);
        //$("#typed").val(thought.substr(0, thought.length - 1));
        if(thought != 'm' && thought != 'M') {
          $("#typed").val('');
        }
      }
    });

    function checkIfCorrect() {
      var thought = $("#typed").val().toLowerCase();
      if(thought == 'mo') {
        return true;
      } else {
        return false;
      }
    }
    </script>
</html>
