<?php

namespace App\Providers;

use App\Models\BlogArticle;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function ($view) {
            $view_name = str_replace('.', '-', $view->getName());
            $blog_articles = BlogArticle::where('deleted_at', null)->get();
            view()->share([
                'view_name' => $view_name,
                'blog_articles' => $blog_articles,
            ]);
        });
    }
}
