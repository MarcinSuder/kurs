@extends('layout')
@section('content')


    <form action="{{ route('countrys.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="countrys">Add countrys</label>
            <input name="countrys" type="text" class="form-control" id="countrys">
        </div>

        <div class="form-group">
            Kraje już dodane<br>
            <select name="category_id" class="form-control">
                @foreach($countrys as $country)

                    <option value="{{ $country->id  }}">{{ $country->countrys }}</option>

                @endforeach
            </select><br>
            Wybierz kontynent<br>
            <select name="id_continents" class="form-control">
                @foreach($continents as $continent)

                    <option value="{{ $continent->id  }}">{{ $continent->kontynent}}</option>

                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary active">>> ADD <<</button>
    </form>

    <div style="margin-top: 20px" class="btn btn-danger">

        <a style="color: white" href="/airports">Panel / Powrót</a>

    </div>

@endsection