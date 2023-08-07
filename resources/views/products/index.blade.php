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
  <div class="btn btn-black text-right m-8">
    <a href="products/create" class="p-3 bg-slate-700 text-white rounded-md">New Product</a>
  </div>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td><img src="{{ asset('storage/images/'.$product->image) }}" alt="" width="100"></td>
          <td>
            <a href="products/{{ $product->id }}/edit" class="p-3 bg-blue-500 text-white rounded-md">Edit</a>
            <form action="products/{{ $product->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="p-3 bg-red-500 text-white rounded-md">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach

</body>
</html>