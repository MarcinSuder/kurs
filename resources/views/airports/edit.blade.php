@extends('layout')

@section('content')

    <form action="{{ route('airports.update', $airports->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="airports">Airport</label>
            <input name="airport" value="{{$airports->airports}}" type="text" class="form-control" id="airport">
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary active">>> EDIT <<</button>
        </div>
    </form>


@endsection