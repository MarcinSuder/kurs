@extends('layoutfront')

@section('content')

    <div class="rightColumn"><br><br><form action="mailto:marcin120478@gmail.com" method="post" enctype="text/plain"><div>

                <input name="Imię" placeholder="Podaj swoje imię"/><br />
                <input name="Nazwisko" placeholder="Podaj swoje nazwisko"/>
                <br><br>

                </select>

                <p>Napisz wiadomość</p>
                <textarea name="Wiadomość" cols="50" rows="10" placeholder="Treść wiadomości"></textarea>
                <br /><br /><br />

                <input type="submit" value="Wyślij formularz" />

                <input type="reset" value="Wyczyść dane" />
            </div></form><br><br></div></div>


    @endsection