<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('article.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $articleData = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'author' => $request->author,
            'body' => $request->body,
        ];

        if($request->file('img')){
            $articleData['img'] = $request->file('img')->store('img', 'public');
        }

        $article = Article::create($articleData);

        $article->tags()->attach($request->tags);
        return redirect()->back()->with('message', 'Articolo creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        return view('article.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $newUpdate = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'author' => $request->author,
            'body' => $request->body,
        ];

        if($request->file('img')){
            $newUpdate['img'] = $request->file('img')->store('img', 'public');
        }

        $article->update($newUpdate);
        $article->tags()->sync($request->tags);
        return redirect(route('article.show', compact('article')))->with('message', 'Articolo modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->tags()->detach();
        $article->delete();
        return redirect(route('article.index'))->with('message', 'Articolo eliminato con successo!');
    }

}
