@extends('layoutfront')

@section('content')


    <div class="leftColumn">
        <div class="back">
            <a style="color: rgb(111, 111, 111)" href="/airportsfront">sortowanie</a>
        </div>
    </div>





    <div class="rightColumn">


        



                <div style="font-weight:900;text-align: center; color: darkred;margin-bottom: 3%;margin-top: 3%">{{$article->title}}</div>
                <div style="margin-bottom: 10%">{{$article->article}}</div>







    </div>


@endsection