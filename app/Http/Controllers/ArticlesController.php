<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticlesController extends Controller
{
	public function index()
	{
        // Render a list of a resource.
        
        // auth()->id() // 4
        // auth()->user() // user who currently logged in
        // auth()->check() // boolean
        // auth()->guest() // 
        
		if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            
		  $articles = Article::latest()->get();
        }

		return view('articles.index', ['articles' => $articles]);
	}
    public function show(Article $article)
    {
    	// Show a single resource.
    
    	// $article = Article::findorFail($id);
    	return view('articles.show', ['article' => $article]);
    }
    public function create()
    {
    	// Shows a view to create a new resource
    	

    	return view('articles.create', [
            'tags' => Tag::all()
        ]);

    }
    public function store()
    {
		// Persist the new resource
		
		// $validAttributes = request()->validate([

		// 	'title'   => 'required',
		// 	'excerpt' => 'required',
		// 	'body'    => 'required'
		// ]);

    	// $article = new Article();
    	// $article->title = request('title');
    	// $article->excerpt = request('excerpt');
    	// $article->body = request('body');
    	// $article->save();
        // 
        // Article::create($this->validateArticle());
        $this->validateArticle();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();
        // if (request()->has('tags')) {
        //     # code...
        // }
        $article->tags()->attach(request('tags'));
    	return redirect(route('article.index'));
    }
    public function edit(Article $article)
    {
		// Show a view to edit an existing resource

		// $article = Article::find($id);
		return view('articles.edit', compact('article'));
    }
    public function update(Article $article)
    {
		// Persist the edited resource
		// $validAttributes = request()->validate([

  //           'title'   => 'required',
  //           'excerpt' => 'required',
  //           'body'    => 'required'
  //       ]);

		// $article = Article::find($id);
		// $article->title = request('title');
		// $article->excerpt = request('excerpt');
		// $article->body = request('body');
		// $article->save();
        $article->update($this->validateArticle()); 
		// return redirect(route('articles.show', $article));
        return redirect($article->path());
    }
    public function destroy()
    {
    	// Delete the resource
    }

    public function validateArticle()
    {
        return request()->validate([
            'title'   => 'required',
            'excerpt' => 'required',
            'body'    => 'required',
            'tags'    => 'exists:tags,id'
        ]);
    }
}
