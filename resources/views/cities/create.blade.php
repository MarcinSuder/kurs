@extends('layout')
@section('content')


    <form action="{{ route('cities.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="cities">Add cities</label>
            <input name="cities" type="text" class="form-control" id="cities">
        </div>

        <div class="form-group">
            Miasta juz dodane<br>
            <select name="" class="form-control">
                @foreach($cities as $city)

                    <option value="{{ $city->id  }}">{{ $city->cities }}</option>

                @endforeach
            </select>
                Wybierz kraj<br>
            <select name="id_countrys" class="form-control">
                @foreach($countries as $country)

                    <option value="{{ $country->id  }}">{{ $country->countrys }}</option>

                @endforeach
            </select>
            Wybierz kontynent<br>
            <select name="id_continents" class="form-control">
                @foreach($continents as $continent)

                    <option value="{{ $continent->id  }}">{{ $continent->kontynent }}</option>

                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary active">>> ADD <<</button>
    </form>

    <div style="margin-top: 20px" class="btn btn-danger">

        <a style="color: white" href="/airports">Panel / Powrót</a>

    </div>

@endsection