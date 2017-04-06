@extends('layoutfront')

@section('content')


    <div class="leftColumn">
        <div class="back">
            <a style="color: rgb(111, 111, 111)" href="/airportsfront">sortowanie</a>
        </div>
    </div>





    <div class="rightColumn">


        



                <div style="font-weight:900;text-align: center; color: darkred;margin-top: 3%">{{$article->title}}</div>
                <div style="font-size:12px;margin-bottom: 3%;text-align: center">Dodano: {{$article->updated_at}}</div>
                <div style="margin-bottom: 10%">{{$article->article}}</div>
                <div style="margin-top: 1%;margin-bottom:2%">Źródło: {{$article->source}}</div>







    </div>


@endsection