@extends('layout')

@section('content')



    <div class="container">
        <div class="headerColumn" >
            <div><h2><i>Panel admin.<br></div>
            <div class="menu"><a href="{{route('countrys.index')}}" class="btn btn-danger">Kraj</a></div>
            <div class="menu"><a href="{{route('cities.index')}}" class="btn btn-primary">Miasto</a></div>
            <div class="menu"><a href="{{route('airports.index')}}" class="btn btn-success">Lotnisko</a></div>
            <div class="menu"><a href="" class="btn btn-warning">Wyloguj się</a></div>
        </div>

    </div><br><br>
    <a class="btn btn-danger" href="{{route('airports.create')}}">Dodaj Lotnisko</a>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Lotnisko</th>
            <th>ID_Miasta</th>
            <th>ID_Państwa</th>
            <th>Usuń</th>
            <th>Edytuj</th>
        </tr>
        @foreach($airports as $airport)
            <tr>
                <td>{{ $airport->id }}</td>
                <td>{{ $airport->airports  }}</td>
                <td>{{ $airport->id_cities  }}</td>
                <td>{{ $airport->id_countrys  }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('airports.edit', $airport->id) }}">Edit</a>
                </td>

                <td>
                    <form method="post" action="{{ route('airports.destroy', $airport->id) }}">
                        <input name="_method" type="hidden" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
            </tr>
        @endforeach
    </table>
    {{ $airports->links() }}






@endsection