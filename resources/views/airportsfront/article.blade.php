@extends('layoutfront')

@section('content')


    <div class="leftColumn-index">
        <div class="back">
            <a href="/airportsfront">sortowanie</a>
        </div>
    </div>





    <div class="mainColumn">

                <div style=";text-align: center; color: darkred;margin-top: 160px">{{$article->title}}</div>
                <div style="font-size:12px;margin-bottom: 3%;text-align: center">Dodano: {{$article->updated_at}}</div>
                <div style="margin-left: 1%;margin-right: 1%;margin-bottom: 10%">{{$article->article}}</div>
                <div style="margin-left: 1%;margin-right: 1%;margin-top: 1%;margin-bottom:2%">Źródło: {{$article->source}}</div>

    </div>



    <div class="rightColumn">

        <div class="back1"><a href="/artykuly">artykuły ({{count($articles)}})</a></div>


        @for($i = 0; $i<5; $i++)
            <div style="border-radius: 3px;margin-bottom: 10%;background-color: #eeeeee;margin-left: 5%; margin-right: 5%">

                <div style="text-decoration: underline">{{$articles[$i]['title']}}</div>
                <div>{{str_limit($articles[$i]['article'],150)}}</div>
                <div class="more" style="text-align: right"><a href="/artykuly/{{$articles[$i]['id']}}">...więcej</a> </div>
            </div>
        @endfor
        <div class="more" style="text-align: right; margin-right: 5% "><a href="/artykuly">...więcej artykułów</a> </div>

    </div>



    {{--section responsive--}}

    <div class="section-mobile">

        <div class="header-mobile">

            <div id="worldairports-mobile">
                <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
            </div>

            <div id="menu-mobile">


                <a class="btn btn-danger" href="/airportsfront">Główna</a>
                <a class="btn btn-success" href="/contact">Kontakt</a>
                <a class="btn btn-primary" href="/artykuly">Artykuły</a>

            </div>
        </div>




        <div class="index-mobile" style="padding-top: 50%">



            <div style="font-size:180%;font-weight:900;text-align: center; color: darkred;margin-top: 3%">{{$article->title}}</div>
            <div style="font-size:12px;margin-bottom: 3%;text-align: center">Dodano: {{$article->updated_at}}</div>
            <div class="description">{{$article->article}}</div>
            <div style="margin-top: 1%;margin-bottom:2%">Źródło: {{$article->source}}</div>


        </div>

    </div>



@endsection