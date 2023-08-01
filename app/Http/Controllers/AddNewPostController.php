<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class AddNewPostController extends Controller

{
    public function create(){
        return view('/addNewPost/addnewpost');
    }

    public function store(StoreArticleRequest $request){

        $imgId = uniqid();

        $article = new Article;

        $article->title = $request->title;
        $article->content = $request->content;
        $article->img = 'image-article-' . $imgId . '.' . $request->file('image')->extension();
        $article->image_id = $imgId;
        $article->save();

        
        $filename = 'image-article-' . $imgId . '.' . $request->file('image')->extension();

        $img = $request->file('image')->storeAs('public', $filename);

        return redirect('/');
        

    }
}
