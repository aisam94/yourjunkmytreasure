@extends('components/layout')
@section('content')
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-primary border border-gray p-6
rounded-xl">
        <h1 class="text-center font-bold text-xl">Login</h1>
        <form method="POST" action="/login" class="mt-10">
            @csrf

            <!-- Email -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs" for="email">
                    Email
                </label>
                <input class="border border-gray p-2 w-full" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>
                <input class="border border-gray p-2 w-full" type="password" name="password" id="password" required>
                @error('password')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="mb-6">
                <button type="submit" class="bg-secondary rounded py-2 px-4 w-full hover:bg-secondary-focus text-black">
                    Login
                </button>
            </div>

            <!-- Errors -->
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-error text-xs">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </form>
    </main>
</section>
@endsection