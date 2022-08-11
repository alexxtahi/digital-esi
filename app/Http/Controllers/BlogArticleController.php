<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Http\Requests\StoreBlogArticleRequest;
use App\Http\Requests\UpdateBlogArticleRequest;
use App\Models\User;
use App\Models\Commentaire;
use Exception;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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
        $articles = BlogArticle::where('deleted_at', null)->get();
        $result = session()->get('result') ?? null;
        return view('dashboard.pages.articles.index', compact('articles', 'result'));
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
        $result = session()->get('result') ?? null;
        return view('dashboard.pages.articles.create', compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogArticleRequest $request)
    {

        $data = $request->all();

        // Validation de la requête
        $request->validate([
            'titre_article' => 'required',
            'resume_article' => 'required',
            'contenu_article' => 'required',
        ]);

        // Vérifier si l'enregistrement est déjà dans la base de données
        $existant = BlogArticle::where('titre_article', $data['titre_article'])->first();
        if ($existant != null) { // Si 'enregistrement existe déjà
            if ($existant->deleted_at == null) {
                // Message au cas où l'enregistrement existe déjà...
                $result['state'] = 'warning';
                $result['message'] = 'Cet article existe déjà.';
            } else { // Au cas ou l'enregistrement avait été supprimé...'
                $existant->resume_article = $data['resume_article'];
                $existant->contenu_article = $data['contenu_article'];
                $existant->deleted_at = null;
                $existant->deleted_by = null;
                $existant->created_at = now();
                $existant->save();
                // Message de success
                $result['state'] = 'success';
                $result['message'] = "L'article a bien été enregistré.";
            }
        } else { // Si l'enregistrement n'existe pas alors on le crée
            try {
                // Création d'un nouvel enregistrement
                $article = new BlogArticle;
                $article->titre_article = $data['titre_article'];
                $article->resume_article = $data['resume_article'];
                $article->contenu_article = $data['contenu_article'];
                $article->date_publication = now();
                $article->id_user = Auth::user()->id;
                if (isset($data['img_article']) && !empty($data['img_article']))
                    $article->img_article = 'img/articles/article_' . date('d_m_Y_H_i_s') . '.png';
                $article->created_at = now();
                $article->save(); // Sauvegarde
                //Enregistrement de l'image s'il y'en a
                if (isset($data['img_article']) && !empty($data['img_article'])) {
                    $img_article = Image::make($data['img_article']);
                    //$img_article->resize(300, 300);  // redimensionner les images
                    $img_article->save(public_path($article->img_article));
                }

                // Message de success
                $result['state'] = 'success';
                $result['message'] = "L'article a bien été enregistré.";
            } catch (Exception $exc) { // ! En cas d'erreur
                $result['state'] = 'error';
                $result['message'] = $exc->getMessage();
                $result['img_path'] = $data['img_article'] ?? null;
            }
        }
        //dd($result);
        // Redirection
        return redirect()->route('dashboard.pages.articles.create')->with('result', $result);
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
    public function edit(int $id)
    {
        $article = BlogArticle::find($id);
        $result = session()->get('result');
        return view('dashboard.pages.articles.edit', compact('article', 'result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogArticleRequest  $request
     * @param  \App\Models\BlogArticle  $article
     * @return \Illuminate\Http\Response
     */
    public function update(int $id, UpdateBlogArticleRequest $request)
    {
        $data = $request->all();

        // Validation de la requête
        $request->validate([
            'titre_article' => 'required',
            'resume_article' => 'required',
            'contenu_article' => 'required',
        ]);

        try {
            // Modification
            $article = BlogArticle::find($id);
            $article->titre_article = $data['titre_article'];
            $article->resume_article = $data['resume_article'];
            $article->contenu_article = $data['contenu_article'];
            if (isset($data['img_article']) && !empty($data['img_article']) && $article->img_article == null)
                $article->img_article = 'img/articles/article_' . date('d_m_Y_H_i_s') . '.png';
            $article->date_publication = now();
            $article->id_user = Auth::user()->id;
            $article->updated_at = now();
            $article->save(); // Sauvegarde
            //Enregistrement de l'image s'il y'en a
            if (isset($data['img_article']) && !empty($data['img_article'])) {
                $img_article = Image::make($data['img_article']);
                //$img_article->resize(300, 300);  // redimensionner les images
                $img_article->save(public_path($article->img_article));
            }

            // Message de success
            $result['state'] = 'success';
            $result['message'] = "L'article a bien été modifié.";
        } catch (Exception $exc) { // ! En cas d'erreur
            $result['state'] = 'error';
            $result['message'] = $exc->getMessage();
            $result['img_path'] = $data['img_article'] ?? null;
        }
        //dd($result);
        // Redirection
        return redirect()->route('dashboard.pages.articles.index')->with('result', $result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogArticle  $article
     * @return \Illuminate\Http\Response
     */
    public function delete(int $id)
    {
        try {
            BlogArticle::find($id)->delete();
            $result['state'] = 'success';
            $result['message'] = "L'article a bien été supprimé.";
        } catch (Exception $exc) {
            $result['state'] = 'danger';
            $result['message'] = 'Echec de la suppression.';
        }
        return redirect()->route('dashboard.pages.articles.index')->with('result', $result);
    }
}
