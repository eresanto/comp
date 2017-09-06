<?php

namespace App\Http\Controllers;

use App\Keyword;

class KeywordsController extends Controller
{
    public function index()
    {
        $keywords =  Keyword::get()->pluck('keyword');
        return view('keywords.index', compact('keywords'));
    }

}
