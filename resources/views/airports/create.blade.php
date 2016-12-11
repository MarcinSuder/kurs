@extends('layout')
@section('content')


    <form action="{{ route('airports.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="airports">Add airport</label>
            <input name="airports" type="text" class="form-control" id="airports">
        </div>

        <div class="form-group">
            <select name="airports." class="form-control">
                @foreach($airports as $airport)

                    <option value="{{ $airport->id  }}">{{ $airport->airports }}</option>

                @endforeach
            </select>
        </div>


        <div class="form-group">
            <select name="id_cities" class="form-control">
                @foreach($airports as $airport)

                    <option value="{{ $airport->id_cities  }}">{{ $airport->id_cities }}</option>

                @endforeach
            </select>
        </div>


        <div class="form-group">
            <select name="id_countrys" class="form-control">
                @foreach($airports as $airport)

                    <option value="{{ $airport->id_countrys  }}">{{ $airport->id_countrys }}</option>

                @endforeach
            </select>
        </div>




        <button type="submit" class="btn btn-primary active">>> ADD <<</button>
    </form>

@endsection