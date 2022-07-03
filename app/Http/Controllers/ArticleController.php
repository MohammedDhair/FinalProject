<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::get();
        return view('admin.articles.index',compact('articles'));
    }

    public function create(){
        $users = User::get();
        return view('admin.articles.create',compact('users'));
    }

     public function store(Request $request){
        Article::create([
            'title' => $request->title,
            'content' =>$request->content,
            'user_id' =>$request->user_id,
        ]);

        return redirect()->route('article.index');
    }

    public function edit($id){
        $users = User::get();
        $article = Article::find($id);
        return view('admin.articles.edit',compact('article','users'));
    }

    public function update(Request $request,$id){
        $article = Article::find($id);
        $article->update([
            'title' => $request->title,
            'content' =>$request->content,
            'user_id' =>$request->user_id
        ]);

        return redirect()->route('article.index');
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.index');
    }
}
