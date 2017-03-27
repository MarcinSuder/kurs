@extends('layout')

@section('content')

    <form action="{{ route('comments.update', $comments->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}


        <div class="form-group">
            <label for="nick">Nick</label>
            <input name="nick" value="{{$comments->nick}}" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="comment">Komentarz</label>
            <input name="comment" value="{{$comments->comments}}" type="text" class="form-control">
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary active">>> EDIT <<</button>
        </div>
    </form>


@endsection