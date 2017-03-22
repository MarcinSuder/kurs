@extends('layout')
@section('content')


    <form action="{{ route('airports.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="airports">Dodaj lotnisko</label>
            <input name="airports" type="text" class="form-control" id="airports">
        </div>

        <div class="form-group">
            Lotniska juz dodane<br>
            <select name="" class="form-control">
                @foreach($airports as $airport)

                    <option value="{{ $airport->id  }}">{{ $airport->airports }}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            Opis lotniska<br>
            <textarea rows="4" cols="140" name="description">
            </textarea>
        </div>

        <div class="form-group">
            Strona intern.<br>
            <input type="text" name="website">
        </div>


        <div class="form-group">
            Nazwa fotki<br>
            <input type="text" name="photo">
        </div>


        <div class="form-group">
            Wybierz miasto<br>
            <select name="id_cities" class="form-control">
                @foreach($cities as $city)

                    <option value="{{ $city->id  }}">{{ $city->cities  }}</option>

                @endforeach
            </select>
        </div>


        <div class="form-group">
            Wybierz kraj<br>
            <select name="id_countries" class="form-control">
                @foreach($countries as $country)

                    <option value="{{ $country->id  }}">{{ $country->countrys }}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
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