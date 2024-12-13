<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
public function show($id) {
    $articles = Article::where('id', $id)->get();
    return view('articles', compact('articles'));
}

}
