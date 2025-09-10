<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request){
        $search = $request->input('search');

    $articles = Article::when($search, function($query, $search) {
        return $query->where('title', 'like', "%{$search}%");
    })->latest()->paginate(5);

    return view('articles.index', compact('articles', 'search'));
}
    

  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content'=>'required|string|min:10',
        ]);

         Article::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('articles.index')->with('succes', 'Article crée avec succés');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
         
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content'=>'required|string|min:10',
        ]);
        $article = Article::findOrfail($id);
        $article->update($request->all());

        return redirect()->route('articles.index')->with('succes', 'Article mise a jour avec succés');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('succes', 'Article supprimé avec succés');
    }

}
