<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>Formulario de edición</h1>

    <form action="{{route('posts.update',$post)}}" method="POST">
        {{--  tener en cuenta ese token--}}
        @csrf @method('PATCH')
        @include("posts.form-fields")
        </form>
        <br>

    <a href="{{route('posts.index')}}">Regresar</a>
    </x-layout>