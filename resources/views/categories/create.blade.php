@extends('layout')

@section('content')

    <form method="post" action="{{route('categories.store')}}">

        {{ csrf_field() }}
        <div class="form-group" >
            <label for="title">TITLE:</label>
            <input type="text" class="form-control" name="name">
        </div>

        <button type="submit" class="btn btn-primary active">ADD PAGE</button>
    </form>




    @endsection