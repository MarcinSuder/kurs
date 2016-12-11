@extends('layout')

@section('content')

    <form method="post" action="{{route('categories.update', $categories->id)}}">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group" ">
            <label for="title">Name</label>
            <input type="text" value="{{$categories->name}}" class="form-control" name="name">
        </div>

        <button type="submit" class="btn btn-primary active">Edit PAGE</button>
    </form>




    @endsection