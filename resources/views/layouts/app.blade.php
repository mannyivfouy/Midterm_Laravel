<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        @include('components.sidebar')

        <div class="flex flex-1 flex-col">
            @include('components.navbar')

            <main class="flex-1 p-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
