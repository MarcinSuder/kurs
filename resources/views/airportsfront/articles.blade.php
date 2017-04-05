@extends('layoutfront')

@section('content')


    <div class="leftColumn">
        <div class="back">
            <a style="color: rgb(111, 111, 111)" href="/airportsfront">sortowanie</a>
        </div>
    </div>





    <div class="rightColumn">


        <div class="index">
            Artykuły
        </div>


        <table class="table table-striped">
            @foreach($articles as $article)


                <div style="text-align: center; color: darkred;margin-bottom: 3%">{{$article->title}}</div>
                <div style="margin-bottom: 10%">{{str_limit($article->article,800)}} <a href="/artykuly/{{$article->id}}">...więcej</a> </div>


            @endforeach
        </table>

        {{ $articles->links() }}



    </div>


    @endsection