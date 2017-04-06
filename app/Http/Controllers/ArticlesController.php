<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        return view('articles.index',compact('articles'));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    public function update(Request $request,$id)
    {
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->article = $request->input('article');
        $article->source = $request->input('source');
        $article->save();
        return redirect('/articles');
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->article = $request->input('article');
        $article->source = $request->input('source');
        $article->save();
        return redirect('/articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
;