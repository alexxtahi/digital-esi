<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Http\Requests\StoreBlogArticleRequest;
use App\Http\Requests\UpdateBlogArticleRequest;
use App\Models\User;
use App\Models\Commentaire;

class BlogArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Affichage
        return view('blog.blog', compact('blog_articles'));
    }

    public function dashIndex()
    {
        return view('dashboard.pages.articles.index');
    }
    // Page de détails d'un article
    public function detailsArticle(StoreBlogArticleRequest $request)
    {
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        $articles_recents = BlogArticle::where('deleted_at', null)->paginate(2);

        $article = BlogArticle::where('id', $request->get('id'))->first();
        $commentaires = Commentaire::where([['commentaires.deleted_at', null], ['commentaires.id_article', $request->get('id')]])
            ->join('users', 'users.id', '=', 'commentaires.id_user')
            ->join('blog_articles', 'blog_articles.id', '=', 'commentaires.id_article')
            ->select('commentaires.*', 'users.nom_user', 'users.prenom_user')->get();
        $author = User::where('id', $article->id_user)->first();

        // Affichage
        return view('blog.blog-details', compact('blog_articles', 'articles_recents', 'article', 'commentaires', 'author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.pages.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogArticleRequest $request)
    {
        //dd($request);

        $request->validate([
            "title" => 'required',
        ]);

        //Enregistrement dans la bd
        BlogArticle::create([
            'titre_article' => $request->get('title'),
            'resume_article' => $request->get('resume'),
            'contenu_article' => $request->get('content'),
            'image_article' => 'img/' . $request->get('img')[0],
            'date_publication' => now(),
            'id_user' => 1,
            'created_at' => now(),
        ]);

        return redirect()->route('dashboard.pages.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function show(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogArticleRequest  $request
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogArticleRequest $request, BlogArticle $blogArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogArticle  $blogArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogArticle $blogArticle)
    {
        //
    }
}
