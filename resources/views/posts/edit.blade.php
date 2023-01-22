@extends('components/layout')
@section('content')

<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-primary border border-gray p-6 rounded-xl">
        <h1 class="text-center font-bold text-xl">Edit Post - {{ $post->title }}
        </h1>
        <form method="POST" action="/posts/{{ $post->id }}" class="mt-10">
            @csrf
            @method('PATCH')

            <!-- Title -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray" for="title">
                    Title
                </label>
                <input class="border border-gray p-2 w-full" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
                @error('title')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray" for="slug">
                    Slug
                </label>
                <input class="border border-gray p-2 w-full" type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}" required>
                @error('slug')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs
text-gray" for="description">
                    Description
                </label>
                <textarea class="border border-gray p-2 w-full" name="description" id="description" required>{{ old('description') }}</textarea>
                @error('description')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @php
                    $categories = \App\Models\Category::all();
                    @endphp
                    @foreach(@$categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs
text-gray" for="price">
                    price
                </label>
                <input class="border border-gray p-2 w-full" type="number" name="price" id="price" value="{{ old('price') }}" required>
                @error('price')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Picture -->
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs
text-gray" for="picture">
                    picture
                </label>
                <input class="border border-gray p-2 w-full" type="file" name="picture" id="picture" value="{{ old('picture') }}" required>
                @error('picture')
                <p class="text-error text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Update -->
            <div class="mb-6">
                <button type="submit" class="bg-primary text-white rounded py-2 px-4 hover:bg-accent">
                    Update
                </button>
            </div>

            <!-- Errors -->
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-error text-xs mt-1">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </form>
    </main>
</section>

@endsection