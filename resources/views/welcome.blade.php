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
                <!-- Not login -->
                <!-- <ul class="">Login</ul>
                <ul class="">Register</ul> -->

                <!-- Already login -->
                <ul class="">Add item</ul>
                <ul class="">Edit item</ul>
                <ul class="">Manage item</ul>
                <ul class="">Logout</ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="grid grid-cols-3 justify-items-center mt-5 mx-5 justify-center">
        <!-- Single item -->
        <article class="border-gray-400 border-2 rounded-lg shadow-md p-5 m-5">
            <div class="flex items-center">
                <!-- Left part -->
                <!-- Item's image -->
                <div class="w-40 h-40 bg-red-500 "></div>

                <!-- Right part -->
                <div class="mx-5">
                    <!-- Title -->
                    <h1>
                        <a class="flex font-bold text-lg justify-center">Washing Machine</a>
                    </h1>

                    <!-- Category -->
                    <div class="text-xs text-gray-400 text-center">
                        Electrical Goods
                    </div>

                    <!-- Description -->
                    <div>
                        <p class="">
                            This is a brief description.
                        </p>
                    </div>

                    <!-- Price -->
                    <div>
                        <div class="text-lg font-bold text-center">RM10.00</div>
                    </div>

                    <!-- Post by author -->
                    <div>
                        <span class="text-xs">Posted by Harry Potter on 31/12/2023</span>
                    </div>
                    <button class="capitalize w-full cursor-pointer bg-none border-2 border-black rounded-md font-bold hover:bg-blue-400">
                        add to cart
                    </button>
                </div>
            </div>
        </article>

        <article class="border-gray-400 border-2 rounded-lg shadow-md p-5 m-5">
            <div class="flex items-center">
                <!-- Left part -->
                <!-- Item's image -->
                <div class="w-40 h-40 bg-red-500 "></div>

                <!-- Right part -->
                <div class="mx-5">
                    <!-- Title -->
                    <h1>
                        <a class="flex font-bold text-lg justify-center">Washing Machine</a>
                    </h1>

                    <!-- Category -->
                    <div class="text-xs text-gray-400 text-center">
                        Electrical Goods
                    </div>

                    <!-- Description -->
                    <div>
                        <p>
                            This is a brief description.
                        </p>
                    </div>

                    <!-- Price -->
                    <div>
                        <div class="text-lg font-bold text-center">RM10.00</div>
                    </div>

                    <!-- Post by author -->
                    <div>
                        <span class="text-xs">Posted by Harry Potter on 31/12/2023</span>
                    </div>
                    <button class="capitalize w-full cursor-pointer bg-none border-2 border-black rounded-md font-bold hover:bg-blue-400">
                        add to cart
                    </button>
                </div>
            </div>
        </article>
        <article class="border-gray-400 border-2 rounded-lg shadow-md p-5 m-5">
            <div class="flex items-center">
                <!-- Left part -->
                <!-- Item's image -->
                <div class="w-40 h-40 bg-red-500 "></div>

                <!-- Right part -->
                <div class="mx-5">
                    <!-- Title -->
                    <h1>
                        <a class="flex font-bold text-lg justify-center">Washing Machine</a>
                    </h1>

                    <!-- Category -->
                    <div class="text-xs text-gray-400 text-center">
                        Electrical Goods
                    </div>

                    <!-- Description -->
                    <div>
                        <p>
                            This is a brief description.
                        </p>
                    </div>

                    <!-- Price -->
                    <div>
                        <div class="text-lg font-bold text-center">RM10.00</div>
                    </div>

                    <!-- Post by author -->
                    <div>
                        <span class="text-xs">Posted by Harry Potter on 31/12/2023</span>
                    </div>
                    <button class="capitalize w-full cursor-pointer bg-none border-2 border-black rounded-md font-bold hover:bg-blue-400">
                        add to cart
                    </button>
                </div>
            </div>
        </article>
        <article class="border-gray-400 border-2 rounded-lg shadow-md p-5 m-5">
            <div class="flex items-center">
                <!-- Left part -->
                <!-- Item's image -->
                <div class="w-40 h-40 bg-red-500 "></div>

                <!-- Right part -->
                <div class="mx-5">
                    <!-- Title -->
                    <h1>
                        <a class="flex font-bold text-lg justify-center">Washing Machine</a>
                    </h1>

                    <!-- Category -->
                    <div class="text-xs text-gray-400 text-center">
                        Electrical Goods
                    </div>

                    <!-- Description -->
                    <div>
                        <p>
                            This is a brief description.
                        </p>
                    </div>

                    <!-- Price -->
                    <div>
                        <div class="text-lg font-bold text-center">RM10.00</div>
                    </div>

                    <!-- Post by author -->
                    <div>
                        <span class="text-xs">Posted by Harry Potter on 31/12/2023</span>
                    </div>
                    <button class="capitalize w-full cursor-pointer bg-none border-2 border-black rounded-md font-bold hover:bg-blue-400">
                        add to cart
                    </button>
                </div>
            </div>
        </article>
    </div>
</body>

</html>