@extends('layoutfront')

@section('content')


    <div class="leftColumn">
        <div class="back">
            <a style="color: #3a3a3ag" href="/airportsfront">sortowanie</a>
        </div>
    </div>





    <div class="rightColumn">






                <div style="font-weight:900;text-align: center; color: darkred;margin-top: 3%">{{$article->title}}</div>
                <div style="font-size:12px;margin-bottom: 3%;text-align: center">Dodano: {{$article->updated_at}}</div>
                <div style="margin-bottom: 10%">{{$article->article}}</div>
                <div style="margin-top: 1%;margin-bottom:2%">Źródło: {{$article->source}}</div>



    </div>



    {{--section responsive--}}

    <div class="section-mobile">

        <div id="worldairports-mobile" style="font-family:'Courier New'; font-weight:600;" >
            <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
        </div>

        <div id="menu-mobile">


            <a class="button" href="/airportsfront">Główna</a>
            <a class="button" href="/contact">Kontakt</a>
            <a class="button" href="/artykuly">Artykuły</a>

        </div>




        <div class="index-mobile" style="padding-top: 50%">



            <div style="font-size:180%;font-weight:900;text-align: center; color: darkred;margin-top: 3%">{{$article->title}}</div>
            <div style="font-size:12px;margin-bottom: 3%;text-align: center">Dodano: {{$article->updated_at}}</div>
            <div class="description">{{$article->article}}</div>
            <div style="margin-top: 1%;margin-bottom:2%">Źródło: {{$article->source}}</div>


        </div>

    </div>



@endsection