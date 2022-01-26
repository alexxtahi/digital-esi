<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Http\Requests\StoreBlogArticleRequest;
use App\Http\Requests\UpdateBlogArticleRequest;

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
        return view('blog', compact('blog_articles'));
    }

    public function index2()
    {
        //
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Affichage
        return view('blog-details', compact('blog_articles'));
    }

    public function index3()
    {
        //
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Affichage
        return view('contacts', compact('blog_articles'));
    }

    public function index4()
    {
        //
        // Récupération des articles récents
        $blog_articles = BlogArticle::where('deleted_at', null)->get();
        // Affichage
        return view('profs', compact('blog_articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogArticleRequest $request)
    {
        //
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
