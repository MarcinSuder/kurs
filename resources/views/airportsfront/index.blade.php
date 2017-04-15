@extends('layoutfront')

@section('content')

    <div class="leftColumn-index">


        <div class="back">sortowanie</div>

        <div class="foreach">
        @foreach($continents as $continent)


                <div class="select"><a href="/airportsbycontinent/{{$continent->id}}">{{$continent->kontynent}}</a></div>

        @endforeach
        </div>

    </div>





    <div class="mainColumn">

         <div class="header">
             Index a-z (Świat) <span style="font-weight: bold;color: orangered;">({{ count($airports) }}) </span>
         </div>


        <table class="table table-striped">
        @foreach($airports as $airport)

                    <tr>
                        <td style="text-align: center"><a class="ahref" href="/showairport/{{ $airport['id'] }}">{{ $airport->airports }} ({{$airport->kraj->countrys}})</a></td>
                    </tr>

        @endforeach
                    </table>

        {{ $airports->links() }}

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
        Index a-z (Świat)
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