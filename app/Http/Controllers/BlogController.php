<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index', ['blogList' => $blog]);
    }
}
