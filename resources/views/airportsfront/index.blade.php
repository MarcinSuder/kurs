@extends('layoutfront')

@section('content')

    <div class="leftColumn-index">

        <div class="select">sortowanie</div>
        <div class="foreach">
        @foreach($continents as $continent)

            <a class="ahref" href="/airportsbycontinent/{{$continent->id}}">{{$continent->kontynent}}</a><br>

        @endforeach
        </div>



    </div>


    <div class="rightColumn">


         <div class="index">
             Index a-z (Świat)
         </div>



                     @foreach($airports as $airport)
                     <div style="border-bottom: 1px solid #b8b8b8">

                         <a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/airplane.png" width="50" height="35"></a>


                         <a class="ahref" href="/showairport/{{ $airport['id'] }}">{{ $airport->airports }} ({{$airport->kraj->countrys}})</a>
                         </div>

                     @endforeach<br>

        {{ $airports->links() }}



    </div>







    {{--section responsive--}}

    <div class="section-mobile">

        <div id="worldairports-mobile" style="font-family:'Courier New'; font-weight:600;" >
            <a style="color:grey;text-decoration: none" href="/start"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
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
                <td><a href="/showairport/{{ $airport['id'] }}"><img src="/css/images/airplane.png" width="50" height="35"></a></td>

                <td><a class="ahref" href="/showairport/{{ $airport['id'] }}">{{ $airport->airports }} ({{$airport->kraj->countrys}})</a><br></td>
            </tr>

        </table>
    @endforeach<br>

    {{ $airports->links() }}

    </div>

    </div>








@endsection