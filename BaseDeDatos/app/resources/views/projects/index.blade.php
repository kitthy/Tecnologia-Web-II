@extends('layout')

@section('title','Ayuda')

@section('content')
      <div class="container">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">Talleres en curso</h1>
                  @auth
                    <a class="btn btn-primary" 
                      href="{{ route('projects.create') }}"
                    > Crear Talleres</a>
                  @endauth
          </div>
          <p class="lead text-secondary"> Ya puedes revisar los talleres que estan en curso,
            para poder inscribirte!</p>
              <ul class="list-group"> 
                  @forelse ($projects as $project)
                      <li class="list-group-item border-0 mb-3 shadow-sm">
                        <a class="text-secondary d-flex justify-content-between align-items-center"
                        href="{{route('projects.show', $project) }}"
                        >
                        <span class="font-weight-bold"> {{ $project-> title}} </span>
                        <span class="text-black-50">{{ $project->created_at->format('d/m/y')}}</span>
                        </a>
                      </li>
                  @empty
                      <li class="list-group-item border-0 mb-3 shadow-sm"> 
                      No hay talleres disponibles
                      </li>
                  @endforelse
                  {{ $projects->links()}}
              </ul>
        </div>  
       <br>    
@endsection

 {{--<li>{{ $CosaItem -> title}}</li>
        <li><a href="{{ $CosaItem->title}}</li> --}}
       {{--  <li>{{ $CosaItem->title}}<br><small>{{ $CosaItem->description}}</small></li> --}}
       {{-- <li>{{ $CosaItem->title}}<br><small>{{ $CosaItem->description}}</small><br> {{$CosaItem->created_at}}</li> //muestra la fecha de creacion --}}
       {{--  <li>{{ $CosaItem->title}}<br><small>{{ $CosaItem->description}}</small><br> {{$CosaItem->created_at->format('Y')}}</li> //muestra solo el año 
        <li>{{ $CosaItem->title}}<br><small>{{ $CosaItem->description}}</small><br> {{$CosaItem->created_at->format('m')}}</li> //muestra el mes "M" literario y "m" mes numeral  
      {{--   <li>{{ $CosaItem->title}}<br><small>{{ $CosaItem->description}}</small><br> {{$CosaItem->created_at->format('Y-M-D')}}</li> // muestra todo 
        <li>{{ $CosaItem->title}}<br><small>{{ $CosaItem->description}}</small><br> {{$CosaItem->updated_at->diffForHumans()}}</li> //hace cuanto tiempo fue creado--}}
         {{--{{ $cosa->links()}} --}}

          {{--<?php foreach ($casa as $elcontacto){
       echo "<li>".$elcontacto['title']."</li>";
    } ?> 
   --}}