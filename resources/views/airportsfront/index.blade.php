@extends('layoutfront')

@section('content')



    <div class="rightColumn"><br><br>

         <h3>Airports</h3> <br>

        <table border="1">
            <tr>
                <th>Airports</th>

            </tr>
            <tr>

            @foreach($airports as $airport)
                <tr>
                <td>{{$airport->airports}}</td>
                </tr>
                @endforeach




        </table><br><br>

        <input type="submit" value="Pokaż lotnisko" class="btn btn-primary"></input><br><br><br><br>



    </div>






@endsection