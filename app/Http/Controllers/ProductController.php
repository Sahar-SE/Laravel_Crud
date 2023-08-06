<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    return view('products.index');
  }

  public function create(){
    return view('products.create');
  }

  public function store(Request $request){
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('products'), $imageName);
  }
}
