<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    return view('product.index');
  }

  public function create(){
    return view('product.create');
  }
}
