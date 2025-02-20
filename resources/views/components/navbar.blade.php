<nav>
    <ul>
        <li><a class="{{request()->routeIs('inicio')? 'text-gray-500' : 'text-textnuevo'}}" href="{{ route('inicio') }}">Inicio</a></li>
        <li><a class="{{request()->routeIs('posts.*')? 'text-gray-500' : 'text-black'}}" href="{{ route('posts.index') }}">Blog</a></li>
        <li><a class="{{request()->routeIs('nosotros')? 'text-gray-500' : 'text-black'}}" href="{{ route('nosotros') }}">Nosotros</a></li>
        <li><a class="{{request()->routeIs('contacto')? 'text-gray-500' : 'text-black'}}" href="{{ route('contacto') }}">Contactenos</a></li>
        <li><a class="{{request()->routeIs('default')? 'text-gray-500' : 'text-black'}}" href="{{ route('default') }}">Default</a></li>
    </ul>
</nav>
