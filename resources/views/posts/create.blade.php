<x-layout meta-title="Creando un nuevo post" meta-description="De nuestro creación de post">
    <h1>Creando un nuevo post</h1>
    <form action="{{route('posts.store')}}" method="POST">
    {{--  tener en cuenta ese token--}}
    @csrf
    @include('posts.form-fields')
    </form>
    <br>
    <a href="{{route('posts.index')}}">Regresar</a>
    
    </x-layout>