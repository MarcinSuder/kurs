@extends('layout')

@section('content')




    <div class="headerColumn" >
        <div><h2><i>Panel admin.<br> </div>
        <div class="adminmenu"><a href="{{route('comments.index')}}" style="background-color: #4a4a4a; color:white;" class="btn btn-default">Komentarze</a></div>
        <div class="adminmenu"><a href="{{route('countrys.index')}}" class="btn btn-danger">Kraj</a></div>
        <div class="adminmenu"><a href="{{route('cities.index')}}" class="btn btn-primary">Miasto</a></div>
        <div class="adminmenu"><a href="{{route('airports.index')}}" class="btn btn-success">Lotnisko</a></div>
        <div class="adminmenu"><a href="/logout" class="btn btn-warning">Wyloguj się</a></div>
        <div class="adminmenu"><a href="/airportsfront" class="btn btn-info">HomeWeb</a></div><br><br>

    </div>

    <div class="admintable">
        <table class="table table-hover" class="admintable">
            <tr>
                <th>ID</th>
                <th>Nick</th>
                <th>Komentarz</th>
                <th>Usuń</th>
                <th>Edytuj</th>
            </tr>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->nick  }}</td>
                    <td>{{ $comment->comments  }}</td>

                    <td>
                        <a class="btn btn-info" href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{ route('comments.destroy', $comment->id) }}">
                            <input name="_method" type="hidden" value="DELETE">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form></td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $comments->links() }}






@endsection