@props(['post'])

<!-- This is components of post to be used when displaying all post in a page -->
<article class="border-gray-400 border-2 rounded-lg shadow-md p-5 m-5">
    <div class="flex items-center">
        <!-- Left part -->
        <!-- Item's image -->
        <div class="w-40 h-40 bg-red-500 "></div>

        <!-- Right part -->
        <div class="mx-5">
            <!-- Title -->
            <h1>
                <a class="flex font-bold text-lg justify-center">
                    {{$post->title}}
                </a>
            </h1>

            <!-- Category -->
            <div class="text-xs text-gray-400 text-center">
                {{$post->category->name}}
            </div>

            <!-- Description -->
            <div>
                <p class="">
                    {{$post->description}}
                </p>
            </div>

            <!-- Price -->
            <div>
                <div class="text-lg font-bold text-center">
                    {{$post->price}}
                </div>
            </div>

            <!-- Post by author -->
            <div>
                <span class="text-xs">
                    Posted by {{$post->author->name}} on <time>
                        {{$post->created_at->diffForHumans()}}
                    </time></span>
            </div>
            <button class="capitalize w-full cursor-pointer bg-none border-2 border-black rounded-md font-bold hover:bg-blue-400">
                add to cart
            </button>
        </div>
    </div>
</article>