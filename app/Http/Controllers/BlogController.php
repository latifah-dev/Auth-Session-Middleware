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
    public function create()
    {
        $blog = Blog::all();
        return view('blog.create', ['blogList' => $blog]);
    }
    public function store(Request $request)
    {
        $newName = "";
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        $request->file('photo')->storeAs('blog',$newName);
        $request['cover']=$newName;
        
        $blog = Blog::create($request->all());
        return redirect('/blog/');
    }
    public function detail($id) {
        $blog = Blog::findOrFail($id);
        return view('blog.detail', ['blog' => $blog]);
    } 
    public function edit($id) {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', ['blog' => $blog]);
    } 
    public function update(Request $request, $id)
    {
        if($request->file('photo')) {
        $newName = "";
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        $request->file('photo')->storeAs('blog',$newName);
        $request['cover']=$newName;
        }
        
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect('/blog/');
    }
    function delete($id) {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('/blog/'); // ke halaman sebelumnya
    } 
}
