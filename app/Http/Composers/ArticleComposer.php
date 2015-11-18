<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Article;

class ArticleComposer
{

    public function lastCompose($view)
    {
        $view->with('latest', Article::latest('published_at')->published()->first() );
    }

     public function firstCompose($view)
    {
        $view->with('latest', Article::published()->first() );
    }

}
