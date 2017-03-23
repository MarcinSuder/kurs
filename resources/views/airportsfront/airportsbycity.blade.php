@extends('layoutfront')

@section('content')





    <div class="leftColumn">

        <div class="back">

            <a style="color: rgb(111, 111, 111)" href="/airportsfront">sortowanie</a>
        </div>

    </div>


    <div class="rightColumn"><br>


        <div class="index">Index a-z ({{$city[0]->cities}})</div>


        <div style="padding-left: 30px;padding-top: 50px;" class="airportslist">
            @foreach($airports as $airport)
                <div style="border-bottom: 1px solid #b8b8b8">


                        <a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/jet2.png" width="30" height="25"></a>

                    <a class="ahref" href="/showairport/{{ $airport['id'] }}">{{$airport->airports}}</a>
                </div>
            @endforeach


        {{ $airports->links() }}


        </div>
    </div>





    {{--section responsive--}}

    <div class="section-mobile">

        <div id="worldairports-mobile">
            <a style="color:grey;text-decoration: none" href="http://airports24.eu/"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
        </div>


            <div id="menu-mobile">

                <a class="button" href="/contact">Kontakt</a>
                <a class="button" href="/airportsfront">Główna/Home</a>

            </div>





            <div class="indexcity-mobile">
                <div class="index">
                    Index Lotnisk a-z ({{$city[0]->cities}})
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
                    Przepraszamy, chwilowo brak dostępnych opisów.
                    <div style="text-align:center; padding-top:30px;">
                        <a style="border-bottom:solid 1px #5c5c5c;color:#4f4f4f;font-weight: 700;font-size: 17px;" href="/airportsfront">Powrót</a>
                    </div>
                @endif<br>

                {{ $airports->links() }}

            </div>

    </div>







@endsection