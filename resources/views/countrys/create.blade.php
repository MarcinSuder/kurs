@extends('layout')
@section('content')


    <form action="{{ route('countrys.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="countrys">Add countrys</label>
            <input name="countrys" type="text" class="form-control" id="countrys">
        </div>

        <div class="form-group">
            <select name="category_id" class="form-control">
                @foreach($countrys as $country)

                    <option value="{{ $country->id  }}">{{ $country->countrys }}</option>

                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary active">>> ADD <<</button>
    </form>

@endsection