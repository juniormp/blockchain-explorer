<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    @livewireStyles
    <title>Blockchain Explorer</title>

</head>
<body>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="antialiased sans-serif bg-gray-200 h-screen">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <div class="container mx-auto py-6 px-4">
        <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
             style="height: 405px;">

            @yield('content')

        </div>
    </div>
</div>
@livewireScripts
</body>
</html>


