<nav class="navbar navbar-light navbar-expand-md bg-while shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
                {{ config('app.name' , 'FreyjaModels')}}       
        </a> 
            <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse"
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent"
                aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item ">
                    <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" 
                        href="/"><i class="fas fa-home"></i>Inicio
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('servicio') ? 'active' : ''}}" 
                        href="/servicio"><i class="fas fa-boxes"></i>Servicios
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('projects.*') ? 'active' : ''}}" 
                        href="/ayuda"><i class="fas fa-link"></i>Ayuda
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('contactos') ? 'active' : ''}}" 
                        href="/contactos"><i class="fab fa-weixin"></i>Contactos
                    </a></li>
                @guest
                <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('login') ? 'active' : ''}}" 
                        href="{{ route('login') }}">Login
                </a></li>
                @else
                <li class="nav-item">
                        <a class="nav-link" 
                            href="#" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        >Cerrar sesiòn</a>
                    </li> 
                @endguest
                </ul> 
        </div>
    </div>
</nav>
        <form id="logout-form" action="{{ route('logout') }}" 
        method="POST" style="display: none;">
            @csrf
        </form>