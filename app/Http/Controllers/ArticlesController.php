<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

use Illuminate\HttpResponse;

class ArticlesController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' => 'create']);
    }

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
        $article= new Article($request->all());
        Auth::user()->articles()->save($artticle);
        return redirect('articles');
    }

    // public function show($id){ $article = Article::findOrFail($id); }
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return redirect('articles');
    }

    public function destroy($id)
    {
    }
}
