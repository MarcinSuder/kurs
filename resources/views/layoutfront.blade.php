<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Lotniska Świata-opisy,opinie,ciekawostki">
    <meta name="keywords" content="lotniska,lotnisko,lotniska opinie,airports,airports24,airport,opinie,">
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

      <div style="font-style: italic;margin-left: 1%;float: left;font-weight:600; font-size:28px;" id="worldairports">
          <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
      </div>





        @if (Auth::user())

            <a class="button" href="/logout" >WYLOGUJ SIĘ</a>

        @else

            <a class="button" href="/login" >ADMIN</a>

        @endif

        @if(Auth::user())

            <a class="button" href="/airports" >ADMIN</a>

        @endif


        <a class="button" href="/offer">WSPÓŁPRACA</a>
        <a class="button" href="/contact">KONTAKT</a>
        <a class="button" href="/airportsfront">GŁÓWNA/HOME</a>



    </div>

        @yield('content')


</body>
</html>