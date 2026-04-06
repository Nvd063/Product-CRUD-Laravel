<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">
    @include('layout.header')

    <div class="flex flex-1">
        @include('layout.sidebar')

        <main class="flex-1 p-8">
            <div class="max-w-5xl mx-auto">
                @yield('content')
            </div>
        </main>
    </div>

    @include('layout.footer')
</body>

</html>