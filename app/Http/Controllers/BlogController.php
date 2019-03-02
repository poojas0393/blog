<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;

class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::get();
    	return view('welcome', compact('blogs', $blogs));
    }

    public function preview_post($id)
    {

    	$blog = Blog::where('id', $id)->first();
    	$author = User::where('id', $blog->user_id)->first();
    	return view('preview', compact('blog',$blog, 'author', $author));
    }

}
