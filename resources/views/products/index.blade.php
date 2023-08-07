<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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

    @if($message = Session::get('success'))
      <div class="bg-red-200 p-5">
        <p class="text-red-800">{{ $message }}</p>
      </div>
    @endif

  <div class="btn btn-black text-right m-8">
    <a href="products/create" class="p-3 bg-slate-700 text-white rounded-md">New Product</a>
  </div>
  <table class="min-w-max w-full table-auto">
    <thead>
      <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
      <th class="py-3 px-6 text-left">S.No</th>
        <th class="py-3 px-6 text-left">Name</th>
        <th class="py-3 px-6 text-left">Image</th>
        <th class="py-3 px-6 text-left w-1/2">Actions</th>
      </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
      @foreach($products as $product)
        <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-6 text-left">{{ $loop->index+1 }}</td>
          <td class="py-3 px-6 text-left whitespace-nowrap">{{ $product->name }}</td>
          <td class="py-3 px-6 text-left">
            <img src="products/{{ $product->image }}" class="rounded-full w-16 h-16"></td>
          <td class="py-3 px-6 text-left flex">
            <a href="products/{{ $product->id }}/edit" class="p-3 bg-blue-500 text-white rounded-md m-2">Edit</a>
            <form action="products/{{ $product->id }}/delete" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="p-3 bg-red-500 text-white rounded-md m-2">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach

</body>
</html>