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
          <form class="form-inline"  method="GET" 
                        action="{{ route('projects.index')}}">
                              <input name="title" id="title" rol="alert" class="form-control mr-sm-2" placeholder="Buscar Taller" aria-label="Search">
                              <input name="description" id="description" rol="alert" class="form-control mr-sm-2" placeholder="Buscar descripcion" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                      </form>
          <div class="form-inline">
                              <input name="search" id="search" rol="alert" class="form-control mr-sm-2" placeholder="Buscar Taller" aria-label="Search">
                              
                      </div>
          <nav class="navbar navbar-light float-right">

                      
          </nav>
          <p class="lead text-secondary"> Ya puedes revisar los talleres que estan en curso,
            para poder inscribirte!</p>
           <table class="table table-hover " id="projects">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Taller</th>
                  <th>Descripcion</th>
                  <th>ver</th>
                </tr>
              </thead>
              <tbody id="tbody">
                  
                      <tr>
                      @forelse ($projects as $project)
                        <td>{{ $project-> id}}</td>
                        <td>{{ $project-> title}}</td>
                        <td>{{ $project-> description}}</td>
                        <td><a class="text-secondary d-flex justify-content-between align-items-center"
                        href="{{route('projects.show', $project) }}"
                        ><button class="btn btn-outline-success my-2 my-sm-0">Ver</button></a></td> 
                      </tr>
                  @empty
                      <li class="list-group-item border-0 mb-3 shadow-sm"> 
                      No hay talleres disponibles
                      </li>
                  @endforelse
                  {{ $projects->links()}}
              </tbody>
           </table>

        </div>  
       <br>    
@endsection
<script>
                 $(document).on('keyup','#search',function(){

                      var search = $(this).val();
                      var route = "{{route('projects.search')}}"

                
                      $.ajax({
                          type: 'GET',
                          url: route,
                          data: {search:search},
                          success:function(data)
                          {
                              console.log("data", data);
                                  $('tbody').empty().html(data);
                          }
                      
                      });
                  });                          
              </script>
