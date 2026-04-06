@extends('layout.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4 text-slate-700">Add New Product</h2>

    <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
        @csrf
        
        <div class="mb-4">
            <label class="block font-semibold mb-1 text-slate-600">Product Name:</label>
            <input type="text" name="name" 
                   class="w-full border rounded p-2 @error('name') border-red-500 @enderror" 
                   value="{{ old('name') }}" placeholder="e.g. iPhone 15">
            @error('name') 
                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1 text-slate-600">Price ($):</label>
            <input type="number" step="0.01" name="price" 
                   class="w-full border rounded p-2 @error('price') border-red-500 @enderror" 
                   value="{{ old('price') }}" placeholder="0.00">
            @error('price') 
                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> 
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1 text-slate-600">Description:</label>
            <textarea name="description" rows="4"
                      class="w-full border rounded p-2 @error('description') border-red-500 @enderror" 
                      placeholder="Enter product details...">{{ old('description') }}</textarea>
            @error('description') 
                <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> 
            @enderror
        </div>

        <div class="flex items-center gap-3">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded font-medium transition">
                Save Product
            </button>
            <a href="{{ route('products.index') }}" class="text-slate-500 hover:underline text-sm">
                Go Back
            </a>
        </div>
    </form>
@endsection