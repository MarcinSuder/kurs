<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Lotniska Świata-opisy,opinie,ciekawostki">
    <meta name="keywords" content="lotniska,lotnisko,lotniska opinie,airports,airports24,airport,opinie,">
    <title>World Airports-Lotniska Świata</title>
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

      <div id="worldairports">
          <a style="color:white;text-decoration: none" href="http://airports24.eu/"> <span style="color: white">airports</span><span style="color: white">24</span><span style="color:white">.eu</span></a>
          <a target="_blank" style="padding-top: 14px;color: white;text-decoration: none;float: right;padding-right: 5px;font-size: 15px" href="https://www.flightradar24.com/">| flightradar24.com</a>
      </div>



<div class="center">

        @if (Auth::user())

            <div class="button"><a  href="/logout" >WYLOGUJ SIĘ</a></div>

        @else

            <div class="button"><a href="/login" >ADMIN</a></div>

        @endif

        @if(Auth::user())

                <div class="button"><a href="/airports" >ADMIN</a></div>

        @endif


            <div class="button"><a href="/offer">WSPÓŁPRACA</a></div>
            <div class="button"><a href="/contact">KONTAKT</a></div>
            <div class="button"><a href="/airportsfront">GŁÓWNA/HOME</a></div>
</div>




    </div>

        @yield('content')


</body>
</html>