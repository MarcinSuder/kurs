@extends('layoutfront')

@section('content')





    <div class="leftColumn">


        <div class="back">
            <a style="color: #3a3a3a" href="/airportsfront">sortowanie</a>
        </div>
        <div class="foreach">
        @foreach($cities as $city)

            <div class="select"><a href="/airportsbycity/{{$city->id}}">{{$city->cities}}</a></div>

        @endforeach
            </div>



    </div>



    <div class="rightColumn">


        <div class="index">Index a-z ({{$country[0]->countrys}})</div>



            @if(count($airports))

            <table class="table table-striped">
                @foreach($airports as $airport)


                    <tr>
                        <td><a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/jet2.png" width="30" height="25"></a></td>


                        <td style="padding-left: 18%"><a class="ahref"  href="/showairport/{{ $airport['id'] }}">{{$airport->airports}}</a></td>
                    </tr>
                @endforeach
                </table>
            @else
                <div style="padding-top: 10%; text-align: center;">
                    Przepraszamy, chwilowo brak dostępnych opisów.
                </div>

                    <div style="text-align: center;padding-top: 30px;">
                        <a style="border-bottom:solid 1px #5c5c5c;color:#4f4f4f;font-weight: 700;font-size: 17px;" href="/airportsfront">Powrót</a>
                    </div>
            @endif
    </div>

        {{ $airports->links() }}







    {{--section responsive--}}

    <div class="section-mobile">

        <div id="worldairports-mobile">
            <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
        </div>

        <div id="menu-mobile">

            <a class="button" href="/airportsfront">Główna</a>
            <a class="button" href="/contact">Kontakt</a>
            <a class="button" href="/artykuly">Artykuły</a>

        </div>


        <div class="select-mobile">
            <select name="formal" onchange="javascript:handleSelect(this)">
                <option value="home">Miasto</option>
                @foreach($cities as $city)
                    <option value="/airportsbycity/{{$city->id}}">{{$city->cities}}</option>
                @endforeach
            </select>
        </div>


        <div class="index-mobile">
            <div class="index">
                Index Lotnisk a-z ({{$country[0]->countrys}})
            </div>


            @if(count($airports))

                @foreach($airports as $airport)

                    <table class="table-bordered">
                        <tr>
                            <td><a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/jet2.png" width="35" height="50"></a></td>

                            <td><a class="ahref" href="/showairport/{{ $airport['id'] }}">{{ $airport->airports }} ({{$airport->kraj->countrys}})</a><br></td>
                        </tr>

                    </table>

                @endforeach

            @else
                <div style="padding-top: 10%; text-align: center;">Przepraszamy, chwilowo brak dostępnych opisów.</div>
                <div style="text-align:center; padding-top:30px;">
                    <a style="border-bottom:solid 1px #5c5c5c;color:#4f4f4f;font-weight: 700;font-size: 17px;" href="/airportsfront">Powrót</a>
                </div>
            @endif<br>

            {{ $airports->links() }}

        </div>

    </div>



@endsection