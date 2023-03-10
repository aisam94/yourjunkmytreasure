@extends('components/layout')
@section('content')

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-primary border-black p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Register</h1>
        <form method="POST" action="/register" class="mt-10">
            @csrf

            <!-- Name -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs" for="name">
                    Name
                </label>
                <input class="border border-gray p-2 w-full" type="text" name="name" id="name" value="{{old('name')}}" required>
                @error('name')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Username -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs" for="username">
                    Username
                </label>
                <input class="border border-gray p-2 w-full" type="text" name="username" id="username" value="{{old('username')}}" required>
                @error('username')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs" for="email">
                    Email
                </label>
                <input class="border border-gray p-2 w-full" type="email" name="email" id="email" value="{{old('email')}}" required>
                @error('email')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs" for="password">Password
                </label>
                <input class="border border-gray p-2 w-full" type="password" name="password" id="password" required>
                @error('password')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit button -->
            <div class="mb-6">
                <button type="submit" class="bg-secondary text-black rounded py-2 px-4 hover:bg-secondary-focus w-full">
                    Submit
                </button>
            </div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-error text-xs">
                    {{ $error }}
                </li>
                @endforeach
            </ul>
            @endif
        </form>
    </main>
</section>

@endsection