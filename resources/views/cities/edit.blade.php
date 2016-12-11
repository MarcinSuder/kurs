@extends('layout')

@section('content')

    <form action="{{ route('cities.update', $city->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cities">Country</label>
            <input name="cities" value="{{$city->countrys}}" type="text" class="form-control" id="country">
        </div>
        <div class="form-group">

            <button type="submit" class="btn btn-primary active">>> EDIT <<</button>
        </div>
    </form>


@endsection