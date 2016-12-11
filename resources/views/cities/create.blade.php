@extends('layout')
@section('content')


    <form action="{{ route('cities.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cities">Add cities</label>
            <input name="cities" type="text" class="form-control" id="cities">
        </div>

        <div class="form-group">
            <select name="id_countrys" class="form-control">
                @foreach($cities as $city)

                    <option value="{{ $city->id  }}">{{ $city->cities }}</option>

                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary active">>> ADD <<</button>
    </form>

@endsection