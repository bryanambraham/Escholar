<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\Article;
class HomeController extends Controller
{
    //
    public function index(){
        $scholarships = Scholarship::all();
        $listarticles= Article::all();
        return view('welcome', compact('scholarships','listarticles'));
    }
}
