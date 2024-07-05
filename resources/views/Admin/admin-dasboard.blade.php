<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div>
        <div x-data="{ open: false }" class="relative overflow-hidden bg-sky-700 pb-32">
            <nav class="bg-transparent relative z-10 border-b border-teal-500 border-opacity-25 lg:border-none lg:bg-transparent"
                 x-state:on="Menu open" x-state:off="Menu closed"
                 :class="{ 'bg-sky-900': open, 'bg-transparent': !open }">
                <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between lg:border-b lg:border-sky-800">
                        <div class="flex items-center px-2 lg:px-0">
                            <div class="hidden lg:ml-6 lg:block lg:space-x-4">
                                <div class="flex gap-3">
                                    <a href="#" class="bg-black bg-opacity-25 rounded-md py-2 px-3 text-sm font-medium text-white"
                                       x-state:on="Current" x-state:off="Default"
                                       x-state-description="Current: &quot;bg-black bg-opacity-25&quot;, Default: &quot;hover:bg-sky-800&quot;">Home</a>
                                    <a href="#" class="hover:bg-sky-800 rounded-md py-2 px-3 text-sm font-medium text-white"
                                       x-state-description="undefined: &quot;bg-black bg-opacity-25&quot;, undefined: &quot;hover:bg-sky-800&quot;">Log Out</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end">
                            <div class="w-full max-w-lg lg:max-w-xs">
                                <label for="search" class="sr-only">Search</label>
                                <div class="relative text-sky-100 focus-within:text-gray-400">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input id="search" name="search" class="block w-full rounded-md border border-transparent bg-sky-700 bg-opacity-50 py-2 pl-10 pr-3 leading-5 placeholder-sky-100 focus:border-white focus:bg-white focus:text-gray-900 focus:placeholder-gray-500 focus:outline-none focus:ring-white sm:text-sm" placeholder="Search" type="search">
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:ml-4 lg:block">
                            <div class="flex items-center">
                                <button type="button" class="flex-shrink-0 rounded-full p-1 text-sky-200 hover:bg-sky-800 hover:text-white focus:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-900">
                                    <span class="sr-only">View notifications</span>
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
                                    </svg>
                                </button>
                                <!-- Profile dropdown -->
                                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative ml-4 flex-shrink-0">
                                    <div>
                                        <button type="button" class="flex rounded-full text-sm text-white focus:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-sky-900" id="user-menu-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=320&amp;h=320&amp;q=80" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div aria-hidden="true" x-state:on="Menu open" x-state:off="Menu closed"
                 class="inset-y-0 absolute inset-x-0 left-1/2 w-full -translate-x-1/2 transform overflow-hidden lg:inset-y-0"
                 :class="{ 'bottom-0': open, 'inset-y-0': !open }">
                <div class="absolute inset-0 flex">
                    <div class="h-full w-1/2" style="background-color: #053B50"></div>
                    <div class="h-full w-1/2" style="background-color: #176B87"></div>
                </div>
                <div class="relative flex justify-center">
                    <svg class="flex-shrink-0" width="1750" height="308" viewBox="0 0 1750 308" xmlns="http://www.w3.org/2000/svg">
                        <path d="M284.161 308H1465.84L875.001 182.413 284.161 308z" fill="#176B87"></path>
                        <path d="M1465.84 308L16.816 0H1750v308h-284.16z" fill="#176B87"></path>
                        <path d="M1733.19 0L284.161 308H0V0h1733.19z" fill="#053B50"></path>
                        <path d="M875.001 182.413L1733.19 0H16.816l858.185 182.413z" fill="#053B50"></path>
                    </svg>
                </div>
            </div>
        </div>

        <main class="relative -mt-32">
            <header class="relative py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">CLASSROOMS</h1>
                </div>
            </header>
            <div class="mx-auto max-w-screen-xl px-4 pb-6 sm:px-6 lg:px-8 lg:pb-16">
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                        <div class="lg:col-span-12 p-4">
                            <button class="mt-4 mb-4 w-full sm:w-auto rounded-md bg-sky-900 hover:bg-sky-950 text-white p-2">ADD NEW CLASS</button>
                        </div>
                        <div class="lg:col-span-12">
                            <div class="grid grid-cols-2 gap-4 mt-4 ml-4 mr-4 mb-4 h-auto justify-center items-center text-sky-950 md:grid-cols-4">
                                <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 md:px-6 md:py-6 shadow-md rounded-md">CLASS B1</button>
                                <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 md:px-6 md:py-6 shadow-md rounded-md">CLASS B2</button>
                                <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 md:px-6 md:py-6 shadow-md rounded-md">CLASS B3</button>
                                <button class="bg-gray-300 hover:bg-gray-400 px-4 py-2 md:px-6 md:py-6 shadow-md rounded-md">CLASS B4</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
