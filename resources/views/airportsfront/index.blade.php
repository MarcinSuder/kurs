@extends('layoutfront')

@section('content')

    <div class="leftColumn-index">

        <div class="back">sortowanie</div>

        <div class="foreach">
        @foreach($continents as $continent)


                <div style="margin-left: 5%"><a class="selectahref" href="/airportsbycontinent/{{$continent->id}}">{{$continent->kontynent}}</a></div>

        @endforeach
        </div>

            <div class="articles-logo"><a href="/artykuly">Artykuły ({{count($articles)}})</a></div>

        {{--@foreach($articles as $article)--}}
            {{--<div style="margin-bottom: 10%;background-color: #eeeeee">--}}
            {{--<div style="color: darkred;font-weight: bold">{{$article->title}}</div>--}}
            {{--<div>{{str_limit($article->article,150)}}</div>--}}
            {{--</div>--}}

            {{--@endforeach--}}

            @for($i = 0; $i<5; $i++)
            <div style="margin-bottom: 10%;background-color: #eeeeee;margin-left: 5%; margin-right: 5%">

            <div style="color: darkred;font-weight: bold">{{$articles[$i]['title']}}</div>
            <div>{{str_limit($articles[$i]['article'],150)}}</div>
                <div class="more" style="text-align: right"><a href="/artykuly/{{$articles[$i]['id']}}">...więcej</a> </div>
            </div>
                @endfor
        <div class="more" style="text-align: right; margin-right: 5% "><a href="/artykuly">...więcej artykułów</a> </div>





    </div>



    <div class="rightColumn">


         <div class="index">
             Index a-z (Świat)
         </div>


        <table class="table table-striped">
        @foreach($airports as $airport)


                    <tr>
                        <td><a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/jet2.png" width="30" height="25"></a></td>


                        <td style="padding-left: 18%"><a class="ahref" href="/showairport/{{ $airport['id'] }}">{{ $airport->airports }} ({{$airport->kraj->countrys}})</a></td>

                    </tr>


        @endforeach
                    </table>

        {{ $airports->links() }}



    </div>




    {{--section responsive--}}

    <div class="section-mobile">

        <div id="worldairports-mobile" style="font-family:'Courier New'; font-weight:600;" >
            <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
        </div>

    <div id="menu-mobile">

        <a class="button" href="/contact">Kontakt</a>
        <a class="button" href="/airportsfront">Główna/Home</a>

    </div>


    <div class="select-mobile">
        <select name="formal" onchange="javascript:handleSelect(this)">
            <option value="home">Kontynent</option>
            @foreach($continents as $continent)
            <option value="/airportsbycontinent/{{$continent->id}}">{{$continent->kontynent}}</option>
            @endforeach
        </select>
    </div>


    <div class="index-mobile">
    <div class="index">
        Index Lotnisk a-z (Świat)
    </div>



    @foreach($airports as $airport)

        <table class="table-bordered">
            <tr>
                <td><a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/jet2.png" width="35" height="50"</a></td>

                <td><a class="ahref" href="/showairport/{{ $airport['id'] }}">{{ $airport->airports }} ({{$airport->kraj->countrys}})</a><br></td>
            </tr>

        </table>
    @endforeach<br>

    {{ $airports->links() }}

    </div>

    </div>

@endsection