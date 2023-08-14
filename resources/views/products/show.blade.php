<!-- Inherit a master layout -->
@extends('layouts.app')

<!-- Create a section for the yeild of application -->
@section('main')

<div>
  <div>
    <img src="/products/{{$product->image}}" alt="{{$product->name}}">
  </div>
  <div>
    {{$product->name}}
  </div>
  <div>
    {{$product->description}}
  </div>
</div>  
@endsection
