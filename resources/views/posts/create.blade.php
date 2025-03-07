<x-app-layout meta-title="Creando un nuevo post" meta-description="Estamos creando un post y verificando el auth">
    
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creando un post') }}
        </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
    <form action="{{route('posts.store')}}" method="POST" class="space-y-4 max-w-xl">
    {{--  tener en cuenta ese token--}}
    
    @include('posts.form-fields')
    <x-primary-button type="submit">{{__('Guardar')}}</x-primary-button>
    @csrf
    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>