@extends('layout')

@section('content')

    <form action="{{ route('cars.update', $car->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME</label>
            <input name="name" value="{{$car->name}}" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="engine">ENGINE</label>
            <textarea name="engine" class="form-control" rows="5" id="content">{{$car->engine}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary active">EDIT PAGE</button>
    </form>


@endsection