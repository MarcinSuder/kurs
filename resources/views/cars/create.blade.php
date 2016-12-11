@extends('layout')
@section('content')


    <form action="{{ route('cars.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">NAME</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="content">ENGINE</label>
            <textarea name="engine" class="form-control" rows="5" id="engine"></textarea>
        </div>
        <button type="submit" class="btn btn-primary active">ADD PAGE</button>
    </form>


@endsection