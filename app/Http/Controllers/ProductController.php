<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index(){
    $products = Product::get();
    return view('products.index',['products'=>$products]);
  }

  public function create(){
    return view('products.create');
  }

  public function store(Request $request){
    //Form Validation
    $request->validate([
      'name' => 'required',
      'description' => 'required',
      'image' => 'required',
    ]);
    
    //Uploading image
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('products'), $imageName);

    //Accessing to form data
    $product = new Product;
    $product->name = $request->name;
    $product->description = $request->description;
    $product->image = $imageName;

    $product->save();
    return back()->withSuccess('New Product Added!');
  }

  public function edit($id){
    $product = Product::find($id);
    //we can also use where method to find the product
    // $product = Product::where('id', $id)->first();
    return view('products.edit', ['product'=>$product]);
  }

  public function update(Request $request, $id){
    //Form Validation
    $request->validate([
      'name' => 'required',
      'description' => 'required',
      'image' => 'nullable',
    ]);

    $product = Product::find($id);
    
    if(isset($request->image)){
      //Uploading image
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('products'), $imageName);
      $product->image = $imageName;
    }

    //Accessing to form data
    $product->name = $request->name;
    $product->description = $request->description;

    $product->save();
    return back()->withSuccess('Product Updated!');
  }

  public function destroy(Request $request, $id){
    $product = Product::find($id);
    $product->delete();
    return back()->withSuccess('Product Deleted!');

  }
}
