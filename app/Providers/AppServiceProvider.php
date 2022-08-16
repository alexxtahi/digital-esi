<?php

namespace App\Providers;

use App\Helpers\UserHelper;
use App\Models\BlogArticle;
use Illuminate\Support\Facades\Route;
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
            $current_route = Route::currentRouteName();
            $blog_articles = BlogArticle::where('deleted_at', null)->get();
            // Retrouver les infos d'un étudiant
            $authUser = UserHelper::getAuthUser();

            view()->share([
                'view_name' => $view_name,
                'current_route' => $current_route,
                'blog_articles' => $blog_articles,
                'authUser' => $authUser,
            ]);
        });
    }
}
