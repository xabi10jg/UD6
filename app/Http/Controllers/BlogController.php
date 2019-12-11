<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(){

    	$posts=Post::latest('published_at','desc')->get();
    	$categorias=Category::All();

    	return view('welcome')->with(['posts'=>$posts, 'categorias'=>$categorias]);
    }
}
