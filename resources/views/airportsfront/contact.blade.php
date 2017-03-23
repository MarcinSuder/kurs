@extends('layoutfront')

@section('content')


        <div style="float:left;font-family:'Courier New'; font-weight:600;" id="worldairports-mobile">
            <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
        </div>

        <br>


        <div id="menu-mobile">

            <a class="button" href="/contact">Kontakt</a>
            <a class="button" href="/airportsfront">Główna/Home</a>

        </div><br><br>


        {{--<form action="mailto:marcin120478@gmail.com" method="post" enctype="text/plain">--}}
            {{--<div style="padding:170px">--}}
                {{--<input name="Imię" placeholder="Podaj swoje imię"/><br>--}}
                {{--<input name="Nazwisko" placeholder="Podaj swoje nazwisko"/><br><br>--}}

                {{--<textarea name="Wiadomość" cols="50" rows="10" placeholder="Treść wiadomości"></textarea><br><br><br>--}}

                {{--<input style="color: #343434" type="submit" value="Wyślij formularz" />--}}
                {{--<input style="color: #343434" type="reset" value="Wyczyść dane" />--}}
            {{--</div>--}}

        {{--</form>--}}


        <br><br>
        <div  style="font-family: 'Dosis', sans-serif;border-top: solid 1px #808080;border-bottom: solid 1px #808080;background-color:rgba(235, 235, 210, 0.49); color:#363636; margin-top: 200px;width:100%;text-align: center; ">
            <h3>marcin120478@gmail.com</h3><br>
            <h3>Kraków, Poland</h3><br>
            <h3>mobile (48) 662 680 700</h3>
        </div>




@endsection