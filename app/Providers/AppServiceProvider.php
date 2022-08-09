<?php

namespace App\Providers;

use App\Models\BlogArticle;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Support\Facades\Auth;
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
            // Retrouver les infos d'un étudiant
            $authUser = null;
            if (Auth::check()) {
                $authUser = Auth::user();
                if ($authUser->role_user == 'Etudiant') {
                    $authUser['etudiant'] = Etudiant::where('id_user', $authUser->id)->first();
                    $authUser['etudiant']['classe'] = Classe::find($authUser['etudiant']->id_classe);
                    if ($authUser['etudiant']['classe'] != null)
                        $authUser['etudiant']['filiere'] = Filiere::find($authUser['etudiant']['classe']->id_filiere);
                }
            }

            view()->share([
                'view_name' => $view_name,
                'blog_articles' => $blog_articles,
                'authUser' => $authUser,
            ]);
        });
    }
}
