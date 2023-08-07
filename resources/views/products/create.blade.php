<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-gray-800 p-2">
  <nav class="flex justify-between">
    <div>
      <a href="/" class="text-white text-lg font-semibold px-2">Products</a>
    </div>
    <div class="space-x-4">
      <a href="/" class="text-gray-300 hover:text-white">Home</a>
      <a href="#" class="text-gray-300 hover:text-white">About</a>
      <a href="#" class="text-gray-300 hover:text-white">Services</a>
      <a href="#" class="text-gray-300 hover:text-white">Contact</a>
    </div>
    <div>
      <input type="text" placeholder="Search" class="px-2 py-1 rounded-md">
    </div>
  </nav>
</div>
    <form method="POST" action="/products/store" enctype="multipart/form-data">
      @csrf
      <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}"/>
        @if($errors->has('name'))
          <span class="text-red-500">{{$errors->first('name')}}</span>
        @endif

        <label>Description</label>
        <textarea name="description" id="" cols="30" rows="10" value="{{ old('description') }}"></textarea>
        @if($errors->has('description'))
          <span class="text-red-500">{{$errors->first('description')}}</span>
        @endif

        <label>Image</label>
        <input type="file" name="image" value="{{ old('image') }}"/>
        @if($errors->has('image'))
          <span class="text-red-500">{{$errors->first('image')}}</span>
        @endif

        <button type="submit">Submit</button>

      </div>
    </form>
</body>
</html>