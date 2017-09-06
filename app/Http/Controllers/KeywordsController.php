<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeywordsController extends Controller
{
    public function index()
    {
        $keywords =  App\Keyword::all()
        return view('keywords.index', compact('$keywords'))
    }

}
