@props(['post'])

<!-- This is components of post to be used when displaying all post in a page -->
<article class="flex flex-col border-gray border-2 rounded-lg shadow-md p-3 m-5 hover:scale-125 ease-in duration-300 hover:shadow-3xl bg-white card">
    <div class="flex items-center">
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
            <p class="text-sm overflow-hidden text-ellipsis paragraph">
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
                    <span class="text-xs truncate text-gray">
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
        <button class="m-1 capitalize w-full cursor-pointer bg-primary border-2 border-black rounded-md font-bold hover:bg-primary-focus">
            add to cart
        </button>

        <!-- View details -->
        <button class="m-1 capitalize w-full cursor-pointer border-2 border-black rounded-md font-bold bg-secondary hover:bg-secondary-focus">
            view details
        </button>
    </div>
</article>