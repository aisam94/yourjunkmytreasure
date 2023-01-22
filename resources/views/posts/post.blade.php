@extends('components/layout')
@section('content')

<!-- This is a view to see single post only -->
<!-- <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6"> -->
<main class="">
    <article class="flex flex-col border-gray border-2 rounded-lg shadow-md p-3 m-5 ease-in duration-300 bg-white w-1/2 mx-auto">
        <div class="flex flex-col items-center">
            <!-- Left part -->
            <!-- Item's image -->
            <img src='{{$post->image}}' alt='' />

            <!-- Right part -->
            <div class="mx-5 relative">
                <!-- Title -->
                <h1 class="top-0">
                    <a class="flex font-bold text-lg justify-center">
                        {{$post->title}}
                    </a>
                </h1>

                <!-- Category -->
                <div class="text-xs text-gray text-center">
                    {{$post->category->name}}
                </div>

                <!-- Description -->
                <p class="text-sm">
                    {{$post->description}}
                </p>

                <div class="">
                    <!-- Price -->
                    <div>
                        <div class="text-lg font-bold text-center">
                            RM{{number_format((float)$post->price, 2, '.', '')}}
                        </div>
                    </div>

                    <!-- Post by author -->
                    <div>
                        <span class="text-xs truncate text-gray float-right">
                            Posted by {{$post->author->name}} on <time>
                                {{$post->created_at->diffForHumans()}}
                            </time></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="flex flex-grow items-center">
            <!-- Add to cart -->
            <button class="px-5 py-1 m-1 mx-auto capitalize cursor-pointer bg-primary border-2 border-black rounded-md font-bold hover:bg-primary-focus">
                add to cart
            </button>
        </div>
    </article>

</main>


@endsection