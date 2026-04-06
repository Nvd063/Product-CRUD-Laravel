<aside class="w-64 bg-slate-900 text-slate-300 min-h-screen shadow-xl">
    <div class="p-6">
        <h2 class="text-xs uppercase font-semibold text-slate-500 mb-4">Main Menu</h2>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('products.index') }}" class="flex items-center p-3 rounded-lg hover:bg-slate-800 hover:text-white transition group">
                    <span class="ml-3">All Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('products.create') }}" class="flex items-center p-3 rounded-lg hover:bg-slate-800 hover:text-white transition">
                    <span class="ml-3">Add New Product</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-slate-800 hover:text-white transition text-slate-500 italic">
                    <span class="ml-3">Categories (Coming soon)</span>
                </a>
            </li>
        </ul>
    </div>
</aside>