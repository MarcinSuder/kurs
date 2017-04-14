@extends('layoutfront')

@section('content')





    <div class="leftColumn-index">

        <div class="back">

            <a style="color:#3a3a3a" href="/airportsfront">sortowanie</a>
        </div>

    </div>


    <div class="mainColumn">


        <div class="header">Index a-z ({{$city[0]->cities}})</div>




            <table class="table table-striped">
            @foreach($airports as $airport)
                <tr>

                    <td style="text-align: center"><a class="ahref" href="/showairport/{{ $airport['id'] }}">{{$airport->airports}}</a></td>
                </tr>
            @endforeach
            </table>


        {{ $airports->links() }}


    </div>


    <div class="rightColumn">

        <div class="back"><a href="/artykuly">artykuły ({{count($articles)}})</a></div>


        @for($i = 0; $i<5; $i++)
            <div style="border-radius: 3px;margin-bottom: 10%;background-color: #eeeeee;margin-left: 5%; margin-right: 5%">

                <div style="color: darkred;">{{$articles[$i]['title']}}</div>
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





            <div class="indexcity-mobile">
                <div class="index">
                    Index a-z ({{$city[0]->cities}})
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