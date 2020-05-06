<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //加载视图root
    public function root()
    {
        return view('pages.root');
    }
}
