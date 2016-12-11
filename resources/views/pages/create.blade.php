@extends('layout')

@section('content')

    <form method="post" action="{{route('pages.store')}}">

        {{ csrf_field() }}
        <div class="form-group" ">
            <label for="title">TITLE:</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea class="form-control" rows="5" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary active">ADD PAGE</button>
    </form>




    @endsection