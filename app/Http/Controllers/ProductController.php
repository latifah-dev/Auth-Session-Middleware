<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('products.index', ['productList' => $product]);
    }
    public function create()
    {
        $product = Product::all();
        return view('products.create', ['productList' => $product]);
    }
    public function store(Request $request)
    {
        $newName = "";
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        $request->file('photo')->storeAs('product',$newName);
        $request['image']=$newName;
        
        $product = Product::create($request->all());
        return redirect('/product/');
    }
    public function detail($id) {
        $product = Product::findOrFail($id);
        return view('products.detail', ['product' => $product]);
    } 
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    } 
    public function update(Request $request, $id)
    {
        if($request->file('photo')) {
        $newName = "";
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
        $request->file('photo')->storeAs('product',$newName);
        $request['image']=$newName;
        }
        
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('/product/');
    }
    function delete($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/product/'); // ke halaman sebelumnya
    } 
}