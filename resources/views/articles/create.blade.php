@extends('layout')

@section('content')



     <form method="POST" action="{{ route('articles.store') }}">
         {{ csrf_field() }}


            <div class="form-group">
                <label for="title">Tytuł</label><br>
                <input name="title" type="text">
            </div>

            <div class="form-group">
                <label for="article">Treść artykułu</label><br>
                <textarea cols="120" rows="10" name="article"></textarea>
                </div>

             <div class="form-group">
                <label for="source">Źródło</label><br>
                <input name="source" type="text">
             </div>


         <button type="submit" class="btn btn-primary active">Dodaj</button>
     </form>

     <div style="margin-top: 20px" class="btn btn-danger">

         <a style="color: white" href="/articles">Panel / Powrót</a>

     </div>




    @endsection