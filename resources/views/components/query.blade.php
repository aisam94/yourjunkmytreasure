<header class="max-w-xl mx-auto text-center">
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8 lg:inline-flex">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-white">
            <div x-data="{show: false}" @click.away="show = false">
                <button @click="show = !show" class='py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex'>{{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </button>

                <div x-show="show" class="border-black border py-2 absolute bg-white mt-2 w-full z-50" style="display:none">
                    <a href="/" class="block text-left px-3 text-sm leading-6 hover:bg-primary focus:bg-primary hover:text-white focus">
                        All
                    </a>
                    @foreach($categories as $category)
                    <a href="/categories/{{ $category->slug }}" class="block text-left px-3 text-sm leading-6 hover:bg-primary focus:bg-primary hover:text-white focus {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'bg-blue-500 text-white' : '' }}">
                        {{ ucwords($category->name) }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Search -->
    <div class="relative flex lg:inline-flex items-center px-3 py-2">
        <form method="GET" action="#">
            <input type="text" name="search" placeholder="Find something" class=" placeholder-black font-semibold text-sm p-2" value="{{ request('search') }}">
        </form>
    </div>
    </div>
</header>