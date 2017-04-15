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
          <div class="flightradar"><a target="_blank" href="http://www.prtl.pl/">| Rynek lotniczy</a> <a target="_blank" href="https://www.flightradar24.com/">| flightradar24.com</a></div>

      </div>


        <div class="button-last"></div>


        @if (Auth::user())

            <a href="/logout" ><div class="button">WYLOGUJ SIĘ</div></a>

        @else


            <a href="/login" ><div class="button">ADMIN</div></a>

        @endif


        @if(Auth::user())

                <a href="/airports" ><div class="button">ADMIN</div></a>

        @endif
            <a href="/contact"><div class="button">KONTAKT</div></a>
             <a href="/offer"><div class="button">WSPÓŁPRACA</div></a>
            <a href="/airportsfront"><div class="button">GŁÓWNA/HOME</div></a>


     </div>








    </div>

        @yield('content')


</body>
</html>