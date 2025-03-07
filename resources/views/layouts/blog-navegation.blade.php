<header class="bg-white px-6 shadow dark:bg-slate-900">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between">
        <button id="toggle-mobile-menu" class="-ml-1 rounded p-1 text-slate-500 transition-colors hover:bg-sky-500 hover:text-slate-100 focus:ring-2 focus:ring-slate-200 md:hidden dark:text-slate-400 dark:hover:text-slate-100">
            <svg id="open-menu-icon" class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
            <svg id="close-menu-icon" class="hidden h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
            </svg>
        </button>
        <a href="/" class="hidden text-sky-500 transition-colors duration-200 hover:rotate-6 hover:text-sky-600 md:block">
            <svg class="h-8 w-8" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"></path>
            </svg>
        </a>
        <div class="-mr-4 flex items-center">
            <div class="ml-8 hidden space-x-8 md:flex">
                <a class="px-3 py-2 {{request()->routeIs('inicio') ? 'text-sky-500' :'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}" href="{{route('inicio')}}">Home</a>
                <a class="px-3 py-2 {{request()->routeIs('posts.*') ? 'text-sky-500' :'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}" href="{{route('posts.index')}}">Blog</a>
                <a class="px-3 py-2 {{request()->routeIs('nosotros') ? 'text-sky-500' :'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}" href="{{route('nosotros')}}">About</a>

                <a class="px-3 py-2 {{request()->routeIs('contacto') ? 'text-sky-500' :'text-slate-600 transition-colors hover:text-sky-500 dark:text-slate-400 dark:hover:text-sky-500' }}" href="{{route('contacto')}}">Contact</a>
            </div>
        </div>
        <div class="flex">
            <div class="relative pt-1">
                <button id="toggle-theme-menu" class="mr-4 rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1 focus:ring-offset-transparent dark:text-slate-400 dark:hover:text-sky-500 dark:focus:ring-slate-700">
                    <svg id="light-icon" class="hidden h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                    </svg>
                    <svg id="dark-icon" class="hidden h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"></path>
                    </svg>
                    <svg id="system-icon" class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"></path>
                    </svg>
                </button>
                <div id="theme-menu" class="absolute right-0 z-20 hidden w-28 overflow-hidden rounded-md bg-white/90 shadow-lg dark:bg-slate-800/90">
                    <button data-theme-option="light" class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:focus-within:bg-slate-900 dark:hover:bg-slate-900">
                        <svg id="sun-icon" class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                        </svg>
                        <span>light</span>
                    </button>
                    <button data-theme-option="dark" class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:focus-within:bg-slate-900 dark:hover:bg-slate-900">
                        <svg id="moon-icon" class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"></path>
                        </svg>
                        <span>dark</span>
                    </button>
                    <button data-theme-option="system" class="flex w-full items-center space-x-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 focus:bg-slate-100 dark:text-slate-300 dark:focus-within:bg-slate-900 dark:hover:bg-slate-900">
                        <svg class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"></path>
                        </svg>
                        <span>system</span>
                    </button>
                </div>
            </div>
            <button class="rounded-full text-slate-500 transition-colors hover:text-sky-500 focus:ring-2 focus:ring-slate-200 focus:ring-offset-1">
                <img class="h-6 w-6 rounded-full" src="https://ui-avatars.com/api?name=Sergio Benavides" alt="Sergio Benavides" />
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden space-y-1 border-t pb-3 pt-2 dark:border-slate-500">
        <a href="{{route('inicio')}}" class="block rounded-md  px-3 py-3 {{request()->routeIs('inicio') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white'}}"> Home </a>

        <a href="{{route('posts.index')}}" 
        class="block rounded-md  px-3 py-3 {{request()->routeIs('posts.*') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white'}}">
            Blog
        </a>

        <a href="{{route('nosotros')}}" 
        class="block rounded-md  px-3 py-3 {{request()->routeIs('nosotros') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white'}}">
            About
        </a>

        <a href="{{route('contacto')}}" 
        class="block rounded-md  px-3 py-3 {{request()->routeIs('contacto') ? 'bg-sky-500 text-white' : 'text-slate-700 transition-colors hover:bg-sky-500 hover:text-white dark:text-slate-400 dark:hover:text-white'}}">
            Contact
        </a>
    </div>
</header>
