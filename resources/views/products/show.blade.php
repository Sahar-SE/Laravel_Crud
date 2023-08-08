@extends('layouts.app')
@section('main')

<div>
  <div>
    <img src="products/{{$product->image}}" alt="{{$product->name}}">
  </div>
  <div>
    {{$product->name}}
  </div>
  <div>
    {{$product->description}}
  </div>
</div>  
@endsection
