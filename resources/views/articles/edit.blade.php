@extends('layout')

@section('content')

    <form action="{{ route('articles.update', $article->id) }}" method="post">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Tytuł</label>
            <input name="title" value="{{$article->title}}" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="article">Artykuł</label>
            <textarea rows="30" cols="140" name="article" value="{{$article->article}}" type="text" class="form-control">{{$article->article}}
                </textarea>
        </div>

        <div class="form-group">
            <label for="source">Źródło</label>
            <input name="source" value="{{$article->source}}" type="text" class="form-control">
        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary active">>> EDIT <<</button>
        </div>
    </form>


@endsection