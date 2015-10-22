<?php

namespace App\Http\Controllers;

use App\Article;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        $title = 'Article';
        return view('articles.index', compact('articles','title'));
    }


    public function create()
    {
        $title = 'Article';

    }


    public function store(Request $request)
    {
        $title = 'Article';
    }


    public function show($id)
    {
        $title = 'Article';
        $article = Article::find($id);
        return view('articles.show', compact('article','title'));
    }


    public function edit($id)
    {
        $title = 'Article';
    }


    public function update(Request $request, $id)
    {
        $title = 'Article';
    }


    public function destroy($id)
    {
        $title = 'Article';
    }
}
