@extends('layout.app')

@section('content')
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">Product List</h2>
        <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Add Product</a>
    </div>

    @if(session('success'))
        <div class="bg-green-200 p-3 mb-4 text-green-800">{{ session('success') }}</div>
    @endif

    <table class="w-full bg-white border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Price</th>
                <th class="p-2 border">Description</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="text-center">
                <td class="p-2 border">{{ $product->id }}</td>
                <td class="p-2 border">{{ $product->name }}</td>
                <td class="p-2 border">{{ $product->price }}</td>
                <td class="p-2 border">{{ $product->description }}</td>
                <td class="p-2 border">
                    <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500">Edit</a> |
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-500" onclick="return confirm('Sure to Delete ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection