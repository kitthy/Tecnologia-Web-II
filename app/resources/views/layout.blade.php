<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>   
    <title>@yield('title','FreyjaModels')</title>

</head>

    <body>
        <div id="app" class = "d-flex flex-column h-screen 
        justify-content-between">
            <header>
                @include('partials.nav')
                @include('partials.session-status')
            </header> 

            <nain class="py-4">
                @yield('content')

            </main>

            <footer class="bg-whire text-center text-black-50 py-3 shadow">
                {{ config('')}} FreyjaModels - Vive la Experiencia | Copyright @ {{ date('Y')}}
            </footer>
        </div>
    </body>
</html>
  {{-- <li class=" {{ setActive('home')}}"><a href="/">Home</a></li> // no me deja configurar en la terminal me salen errores, y 
       tampoco me deja ingresar a la carpeta--}}

  {{-- <li class="{{ setActive('home')}}"> <a href="<{{route('home')}}">@lang('home')</a></li>
     <li class="{{ setActive('servicio')}}"> <a href="<{{route('servicio')}}">@lang('servicio')</a></li>
     <li class="{{ setActive('ayuda')}}"> <a href="<{{route('projects.index')}}">@lang('ayuda')</a></li>
     <li class="{{ setActive('contactos')}}"> <a href="<{{route('contactos')}}">@lang('contactos')</a></li>
     </ul>--}}

{{--<li class=" {{ setActive('home')}}"><a href="/">Home</a></li>
<li class=" {{ setActive('servicio')}}"><a href="/servicio">Servicios</a></li>
<li class=" {{ setActive('ayuda')}}"><a href="/ayuda">Ayuda</a></li>
<li class=" {{ setActive('contactos')}}"><a href="/contactos">Contactos</a></li>--}}