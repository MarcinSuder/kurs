<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>World Airports</title>
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <script type="text/javascript">
        function handleSelect(elm)
        {
            window.location = elm.value;
        }
    </script>
</head>

<body>


    <div  class="headerColumn">

      <div style="float:left;font-family:'Courier New'; padding-left:25px; font-weight:600; font-size:32px; " id="worldairports">
          <a style="color:grey;text-decoration: none" href="/start"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
      </div>


        <div class="flightradar" style="float:left;padding-left: 100px;">
            <a target="_blank" href="https://www.flightradar24.com/"><img width="180" height="40" src="/css/images/flightradar24.jpg"></a>
        </div>


        @if (Auth::user())

            <a class="button" href="/logout" >Wyloguj się</a>

        @else

            <a class="button" href="/login" >Admin</a>

        @endif

        @if(Auth::user())

            <a class="button" href="/airports" >Admin</a>

        @endif


        <a class="button" href="/offer">Współpraca</a>
        <a class="button" href="/contact">Kontakt</a>
        <a class="button" href="/airportsfront">Główna/Home</a>


    </div>

        @yield('content')


</body>
</html>