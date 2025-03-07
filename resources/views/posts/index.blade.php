<x-blog-layout meta-title="Blog" meta-description="Información del blog">
    <div class="mx-auto mt-3 max-w-6xl gap-4">
        <h1 class="my-4 text-center font-serif text-3xl font-extrabold text-sky-600 dark:text-sky-400">Blog</h1>
        @auth
        <div class="flex items-center justify-center">
            <a href="{{route('posts.create')}}" class="group rounded-full bg-sky-600 p-2 text-sky-100 shadow-lg duration-300">
                <svg class="h-6 w-6 duration-300 group-hover:rotate-12" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14M5 12h14"></path>
                </svg>
            </a>

        </div>
        @endauth
    </div>
    <div class="mx-auto mt-3 grid max-w-6xl gap-4 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
        <article class="flex flex-col overflow-hidden rounded bg-white shadow dark:bg-slate-900">
{{--             <div class="h-52">
                <a href="/article.html" class="duration-300 hover:opacity-75">
                    <img class="h-full w-full object-cover object-center" src="/img/article-1.jpg" alt="Desarrollo de una API con laravel siguiendo la especificación JSON:API" />
                </a>
            </div> --}}
            <div class="flex-1 space-y-3 p-5">
                {{-- <h3 class="text-sm font-semibold text-sky-500">Laravel</h3> --}}

                <a href="{{route('posts.show',$post)}}" class="hover:underline dark:hover:decoration-slate-200">
                    <h2 class="text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                        {{$post->title}}
                    </h2>
                </a>
                <p class="hidden text-slate-500 md:block dark:text-slate-400">
                  {{$post->body}}
                </p>
            </div>
{{--             <div class="flex space-x-2 p-5">
                <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api?name=Sergio Benavides" alt="Sergio Benavides" />
                <div class="flex flex-col justify-center">
                    <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400">Sergio Benavides</span>
                    <span class="test-sm text-slate-500">Noviembre 28, 2021</span>
                </div>
            </div> --}}
        </article>
        @endforeach

    </div>

</x-blog-layout>
