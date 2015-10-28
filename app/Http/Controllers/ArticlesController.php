<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

use Illuminate\HttpResponse;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->published()->get();
        return view( 'articles.index', compact('articles') );
    }


    public function create()
    {
        return view('articles.create');

    }


    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        return redirect('articles');
    }


    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }


    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

    public function destroy($id)
    {
    }
}
