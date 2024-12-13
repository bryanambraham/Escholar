<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
class ScholarshipController extends Controller
{
    //
    public function show($id) {
        $scholarships = Scholarship::where('id', $id)->get();
        return view('scholarship', compact('scholarships'));
    }
}
