<x-blog-layout :meta-title="$post->title" :meta-description="$post->body">

    <article class="mx-auto flex max-w-4xl flex-col">
{{--         <div class="h-52 md:h-72 lg:h-96">
            <img class="h-full w-full rounded object-cover object-center" src="/img/article-4.jpg" alt="Desarrollo de una API con laravel siguiendo la especificación JSON:API" />
        </div> --}}
        @auth
        <div class="-mt-2 flex items-center justify-center space-x-10">
            <a
                    href="{{route('posts.edit',$post)}}"
                    class="hidden text-sky-500 transition-colors duration-200 hover:rotate-6 hover:text-sky-600 md:block"
                >

                    <svg
                        class="h-8 w-8 duration-300 group-hover:rotate-12 feather feather-edit"
                        data-slot="icon"
                        fill="none"
                        stroke-width="1.5"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17 3l4 4L7 21H3v-4L17 3z"
                        ></path>
                    </svg>
                </a>
                <form action="{{route('posts.destroy',$post)}}" method="POST">
                    {{--  tener en cuenta ese token--}}
                    @csrf @method('DELETE')
                    <button type="submit" 
                    class="ml-5 hidden text-sky-500 transition-colors duration-200 hover:rotate-6 hover:text-sky-600 md:block">
                    <svg
                        class="h-8 w-8 feather feather-edit"
                        data-slot="icon"
                        fill="none"
                        stroke-width="1.5"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 6h18M9 6v-3h6v3M4 6v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6m-13 6v6m4-6v6m4-6v6"
                        ></path>
                    </svg>
                </button>
                    </form>
       

        </div>
        @endauth
        <div class="flex-1 space-y-3 pt-4">
            {{-- <h3 class="text-sm font-semibold text-sky-500 dark:text-sky-400">Laravel</h3> --}}
            <h1 class="text-2xl font-semibold leading-tight text-slate-800 md:text-center md:text-4xl dark:text-slate-200">
                {{$post->title}}
            </h1>
        </div>
{{--         <div class="flex space-x-2 pt-4 md:mx-auto">
            <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api?name=Sergio Benavides" alt="Sergio Benavides" />
            <div class="flex flex-col justify-center">
                <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400">Sergio Benavides</span>
                <span class="test-sm text-slate-500 dark:text-slate-400">Noviembre 28, 2021</span>
            </div>
        </div> --}}
        <div class="prose lg:prose-xl prose-slate dark:prose-invert mx-auto mt-6">
           {{$post->body}}
        </div>
    </article>

</x-blog-layout>
