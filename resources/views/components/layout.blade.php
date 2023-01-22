<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourJunkMyTreasure</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-secondary">
    <!-- Navbar -->
    <nav class="flex justify-around items-center bg-primary py-5">
        <a href="/" class="text-3xl font-thin">YourJunkMyTreasure</a>
        <div class="absolute right-0">
            <div class="flex space-x-5 mx-1">
                @auth
                <span class="text-sm">{{ auth()->user()->name }}</span>

                <a href='/create' class="ml-6 text-sm capitalize">new post</a>
                <a href='/manage/{{ auth()->user()->name }}' class="ml-6 text-sm capitalize">manage</a>

                <form method="POST" action="/logout" class="text-sm font-semi-bold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>

                @else
                <a href="/login" class="text-sm  capitalize">login</a>
                <a href="/register" class="text-sm capitalize ">register</a>

                @endauth
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')
</body>

</html>