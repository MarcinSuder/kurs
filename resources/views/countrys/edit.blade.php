@extends('layout')

@section('content')

    <form action="{{ route('countrys.update', $countrys->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="country">Country</label>
            <input name="country" value="{{$countrys->countrys}}" type="text" class="form-control" id="country">
        </div>
        <div class="form-group">

        <button type="submit" class="btn btn-primary active">>> EDIT <<</button>
            </div>
    </form>


@endsection