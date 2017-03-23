@extends('layoutfront')

@section('content')

    <div class="leftColumn">
            <div class="back">
                <a style="color: rgb(111, 111, 111)" href="/airportsfront">sortowanie</a>
            </div>
    </div>



    <div class="rightColumn" >

        <div class="index"> {{$airports[0]->airports}}</div>


            <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsfront">Świat</a></div>
            <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsbycontinent/{{$continent[0]->id}}">{{$continent[0]->kontynent}}</a></div>
            <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsbycountry/{{$country[0]->id}}">{{$country[0]->countrys}}</a></div>
            <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsbycity/{{$city[0]->id}}">{{$city[0]->cities}}</a></div>



                <div class="description">{{$airports[0]->description}}</div>


        @if( !empty($airports[0]['website']))
        <div class="website">
            <a style="color: #2b2b2b; text-decoration: none" href="{{$airports[0]->website}}" target="_blank">Oficjalna / Website</a>
        </div>
        @else
            @endif



        @if( !empty($airports[0]['foto']) )
        <div style="padding-top: 100px;">

             <img class="img" src="/css/images/{{$airports[0]->foto}}" >
             <div style="text-align: center">foto: {{$airports[0]->airports}}</div>

        </div>
        @else
            <div style="padding-top: 100px;">
                <img class="img" src="/css/images/otherexample.jpg">
                <div style="text-align: center">Foto przykładowe</div>
                </div>

        @endif




        <div class="comments" style="padding-top: 60px">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/showairport/{{$airports[0]->id}}" method="POST">
                    {{ csrf_field() }}

                    <input type="text" name="nick" placeholder="Podpis"><br><br>
                    <textarea name="comment" placeholder="Komentarz" rows="5" cols="50"></textarea><br>
                    <input type="submit" value="Wyślij" class="btn">

                </form>

        </div>



            <div class="comments"><b>Komentarze ({{count($comments)}})</b></div>
            @foreach($comments as $comment)

                <div style="padding-top: 30px;color: #383838; "><b>~ {{$comment->nick}} </b> ({{$comment->created_at}})</div>

                <div style="border-bottom:solid 1px rgba(133, 133, 133, 0.38);padding: 8px;color: #383838; ">{{$comment->comments}}</div>


            @endforeach


        </div>




    {{--section responsive--}}

    <div class="section-mobile">

        <div style="float:left;font-family:'Courier New'; font-weight:600;" id="worldairports-mobile">
            <a style="color:grey;text-decoration: none" href="/start"> <span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color: white">airports</span><span style="text-shadow: 0px 1px 5px red;color: white">24</span><span style="text-shadow: 0px 1px 5px rgb(33, 33, 33);color:white">.eu</span></a>
        </div><br>


                <div id="menu-mobile">

                    <a class="button" href="/contact">Kontakt</a>
                    <a class="button" href="/airportsfront">Główna/Home</a>

                </div>


            <div class="indexcity-mobile">
                <div class="index"> {{$airports[0]->airports}}</div>

                <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsbycontinent/{{$continent[0]->id}}">{{$continent[0]->kontynent}}</a></div>
                <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsbycountry/{{$country[0]->id}}">{{$country[0]->countrys}}</a></div>
                <div class="button-airport"><a style="color: #2b2b2b; text-decoration: none" href="/airportsbycity/{{$city[0]->id}}">{{$city[0]->cities}}</a></div><br><br>

                <div class="description">{{$airports[0]->description}}</div>
            </div>



                @if( !empty($airports[0]['foto']) )
                    <div style="padding-top: 100px;">

                        <img class="img" src="/css/images/{{$airports[0]->foto}}" >
                        <div style="text-align: center">foto: {{$airports[0]->airports}}</div>

                    </div>
                @else
                    <div style="padding-top: 100px;">
                        <img class="img" src="/css/images/otherexample.jpg">
                        <div style="text-align: center">Foto przykładowe</div>
                    </div>

                @endif




                <div class="comments" style="padding-top: 60px">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/showairport/{{$airports[0]->id}}" method="POST">
                        {{ csrf_field() }}

                        <input type="text" name="nick" placeholder="Podpis"><br><br>
                        <textarea name="comment" placeholder="Komentarz" rows="5" cols="50"></textarea><br>
                        <input type="submit" value="Wyślij" class="btn">

                    </form>

                </div>



                <div class="comments"><b>Komentarze({{count($comments)}})</b></div>
                @foreach($comments as $comment)

                    <div style="font-size:150%;padding-top: 30px;color: #383838; "><b>~ {{$comment->nick}} </b> ({{$comment->created_at}})</div>

                    <div style="font-size:150%;border-bottom:solid 1px rgba(133, 133, 133, 0.38);padding: 8px;color: #383838; ">{{$comment->comments}}</div>

                    @endforeach

    </div>









@endsection