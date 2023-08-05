<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomePrimaryController extends Controller
{
    public function index(){

        $getAllArticles = Article::all();

        return view('/home/primaryHomepage', [
            'articles' => $getAllArticles
        ]);
    }
}
