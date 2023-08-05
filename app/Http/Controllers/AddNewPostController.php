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

        $imageId = uniqid();

        $article = new Article;

        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = 'image-article-' . $imageId . '.' . $request->file('image')->extension();
        $article->imageid = $imageId;
        $article->save();

        
        $filename = 'image-article-' . $imageId . '.' . $request->file('image')->extension();

        $image = $request->file('image')->storeAs('public', $filename);

        return redirect('/');
        

    }
}
