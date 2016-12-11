@extends('layout')

@section('content')

    <form method="post" action="{{route('pages.update', $page->id)}}">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group" >
            <label for="title">TITLE:</label>
            <input type="text" value="{{$page->title}}" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="content">CONTENT:</label>
            <textarea class="form-control" rows="5" name="content">{{$page->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary active">Edit PAGE</button>
    </form>




    @endsection