<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourJunkMyTreasure</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <!-- Navbar -->
    <nav class="flex justify-around items-center bg-gray-500 py-5">
        <h1 class="text-3xl font-thin">YourJunkMyTreasure</h1>
        <div class="absolute right-0 bg-pink-300 ">
            <div class="flex space-x-5 mx-1">
                @auth
                <span class="text-xs font-bold capitalize">{{ auth()->user()->name }}</span>

                <a href='/create' class="ml-6 text-xs font-bold uppercase">New Post</a>
                <a href='/manage/{{ auth()->user()->name }}' class="ml-6 text-xs font-bold uppercase">Manage</a>

                <form method="POST" action="/logout" class="text-xs font-semi-bold text-blue-500 ml-6">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>

                @else
                <a href="/login" class="ml-6 text-xs font-bold uppercase">Login</a>
                <a href="/register" class="text-xs font-bold uppercase">Register</a>

                @endauth
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')
</body>

</html>