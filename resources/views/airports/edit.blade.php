@extends('layout')

@section('content')

    <form action="{{ route('airports.update', $airports->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="airports">Airport</label>
            <input name="airport" value="{{$airports->airports}}" type="text" class="form-control" id="airport">
        </div>
        Opis
        <div class="form-group">
            <textarea rows="4" cols="140" name="description" value="{{$airports->description}}">
{{$airports->description}}
            </textarea>
        </div>
        Strona int.
        <div class="form-group">
            <input name="website" type="text" value="{{$airports->website}}">
        </div>
        Foto
        <div class="form-group">
            <input name="foto" type="text" value="{{$airports->foto}}">
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary active">>> EDIT <<</button>
        </div>
    </form>


@endsection