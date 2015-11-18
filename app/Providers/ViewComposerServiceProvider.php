<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Article;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // The last Article created at the index page of the practices
       $this->composeLastArticlePublished();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeLastArticlePublished()
    {
        view()->composer('sections.practices-lastArticle', 'App\Http\Composers\ArticleComposer@lastCompose');
        // Default is @compose
    }
}
