@extends('layout')

@section('content')




    <div class="headerColumn" >
        <div><h2><i>Panel admin.<br> </div>
        <div class="adminmenu"><a href="{{route('comments.index')}}" style="background-color: #4a4a4a; color:white;" class="btn btn-default">Komentarze</a></div>
        <div class="adminmenu"><a href="{{route('articles.index')}}" style="background-color: #4a4a4a; color:white;" class="btn btn-default">Artykuły</a></div>
        <div class="adminmenu"><a href="{{route('countrys.index')}}" class="btn btn-danger">Kraj</a></div>
        <div class="adminmenu"><a href="{{route('cities.index')}}" class="btn btn-primary">Miasto</a></div>
        <div class="adminmenu"><a href="{{route('airports.index')}}" class="btn btn-success">Lotnisko</a></div>
        <div class="adminmenu"><a href="/logout" class="btn btn-warning">Wyloguj się</a></div>
        <div class="adminmenu"><a href="/airportsfront" class="btn btn-info">HomeWeb</a></div><br><br>
        <a class="btn btn-danger" href="{{route('cities.create')}}">Dodaj Miasto</a>
    </div>

    <div class="admintable">
        <table class="table table-hover" class="admintable">
            <tr>
                <th>ID</th>
                <th>Tytuł</th>
                <th>Treść</th>
                <th>Źródło</th>
                <th>Usuń</th>
                <th>Edytuj</th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ str_limit($article->article,500) }}</td>
                    <td>{{ $article->source }}</td>

                    <td>
                        <a class="btn btn-info" href="{{ route('articles.edit', $article->id) }}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{ route('articles.destroy', $article->id) }}">
                            <input name="_method" type="hidden" value="DELETE">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $articles->links() }}






@endsection