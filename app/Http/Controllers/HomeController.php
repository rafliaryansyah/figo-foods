<?php

namespace App\Http\Controllers;

use App\Welcome;
use App\Choose;
use App\History;
use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $welcome = Welcome::all();
        $choose = Choose::all();
        $history = History::all();
        $news = News::all();
        // dd($history);
        return view('home', compact('welcome', 'choose', 'history', 'news'));
    }
}
