<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articleCategories = Article::all()->groupBy('category_name');
        return view('backend.admin_index', compact('articleCategories'));
    }

    public function staff()
    {
        $articleCategories = Article::all()->groupBy('category_name');
        return view('backend.staff_index', compact('articleCategories'));
    }
}
