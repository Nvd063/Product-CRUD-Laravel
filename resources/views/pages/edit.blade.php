@extends('layout.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Product: {{ $product->name }}</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label>Name:</label>
            <input type="text" name="name" class="w-full border p-2" value="{{ old('name', $product->name) }}">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>Price:</label>
            <input type="number" name="price" class="w-full border p-2" value="{{ old('price', $product->price) }}">
            @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label>Description:</label>
            <input type="text" name="description" class="w-full border p-2" value="{{ old('description', $product->description) }}">
            @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update Product</button>
        <a href="{{ route('products.index') }}" class="ml-2 text-gray-600">Cancel</a>
    </form>
@endsection