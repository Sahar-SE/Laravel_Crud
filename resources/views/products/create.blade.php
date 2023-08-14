<!-- Inherit a master layout -->
@extends('layouts.app')

<!-- Create a section for the yeild of application -->
@section('main')

<!-- Create a message for the success of an operation -->
@if($message = Session::get('success'))
      <div class="bg-green-200 p-5">
        <p class="text-green-800">{{ $message }}</p>
      </div>
    @endif

<div class="max-w-md mx-auto mt-5">
    <form method="POST" action="/products/store" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
          <input type="text"
          name="name" value="{{ old('name') }}"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
           leading-tight focus:outline-none focus:shadow-outline"/>

          @if($errors->has('name'))
            <span class="text-red-500 text-xs">{{$errors->first('name')}}</span>
          @endif
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
          <textarea name="description" rows="5"
          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
           leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>

          @if($errors->has('description'))
            <span class="text-red-500 text-xs">{{$errors->first('description')}}</span>
          @endif
        </div>

        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
          <input type="file"
             name="image" value="{{ old('image') }}"
             class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700
              leading-tight focus:outline-none focus:shadow-outline"/>

          @if($errors->has('image'))
            <span class="text-red-500 text-xs">{{$errors->first('image')}}</span>
          @endif
        </div>
        <button type="submit" class="bg-slate-700 hover:bg-slate-800 text-white font-bold
         py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
      
    </form>
    </div>
@endsection