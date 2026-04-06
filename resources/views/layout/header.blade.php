<header class="bg-slate-800 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <div class="text-xl font-bold tracking-wider">
            <a href="/" class="hover:text-blue-400">MY<span class="text-blue-400">STORE</span></a>
        </div>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="{{ route('products.index') }}" class="hover:text-blue-400 transition">Dashboard</a></li>
                <li><a href="#" class="hover:text-blue-400 transition">Settings</a></li>
                <li class="bg-blue-600 px-3 py-1 rounded hover:bg-blue-700">
                    <a href="#">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</header>