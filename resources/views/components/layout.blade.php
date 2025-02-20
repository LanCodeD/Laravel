<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$metaTitle ?? 'Laravel'}}</title>
    <meta name='description' content="{{$metaDescription ?? "Framework Laravel"}}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />
    @session('status')
    <div>{{$value}}</div>
    @endsession

    {{$slot}}

    @isset($sidebar)
    <div id="sidebar">
        <h3>Sidebar</h3>
        <div>{{$sidebar}}</div>
    </div>

    @endisset

</body>
</html>
