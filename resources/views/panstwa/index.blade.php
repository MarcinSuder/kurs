@extends('layout')

@section('content')



    <div class="container">
        <div class="headerColumn" >
            <div><h2><i>Panel admin.<br><br></div>
            <div class="menu"><a href="" class="btn btn-danger">Kraj</a></div>
            <div class="menu"><a href="" class="btn btn-primary">Miasto</a></div>
            <div class="menu"><a href="" class="btn btn-success">Lotnisko</a></div>
            <div class="menu"><a href="" class="btn btn-warning">Wyloguj się</a></div>
        </div>

    </div>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Państwo</th>
            <th>Usuń</th>
            <th>Edytuj</th>
        </tr>
    @foreach($panstwa as $panstwo)
        <tr>
            <td>{{ $panstwo->id }}</td>
            <td>{{ $panstwo->panstwo  }}</td>

            <td>
                <a class="btn btn-info" href="{{ route('panstwa.edit', $panstwo->id) }}">Edit</a>
            </td>

            <td>
                <form method="post" action="{{ route('panstwa.destroy', $panstwo->id) }}">
                    <input name="_method" type="hidden" value="DELETE">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
        </tr>
    @endforeach
    </table>
    {{ $panstwa->links() }}






    @endsection