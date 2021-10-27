<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Wave\Category;
use Wave\Post;

class DashboardController extends \App\Http\Controllers\Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);
        $categories = Category::all();
        $user = Auth::user();

    	$seo = [
    		'seo_title' => 'Blog',
            'seo_description' => 'Our Blog',
       	];
           return view('theme::dashboard.index',compact('posts', 'categories', 'seo' , 'user'));

    }
}
