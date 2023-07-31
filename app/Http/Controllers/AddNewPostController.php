<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AddNewPostController extends Controller

{
    public function create(){
        return view('/addNewPost/addnewpost');
    }

    public function store(Request $request){

        $article = new Article;

        $article->title = $request->title;
        $article->content = $request->content;

        $article->save();

        return redirect('/');
        

    }
}
