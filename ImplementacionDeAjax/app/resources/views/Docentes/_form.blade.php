@csrf 
                    <div class="form-group">
                            <label for="nombre">Nombre</label>
                                    <input class="form-control border-0 bg-light shadow-sm"
                                    id="nombre"
                                    type="text"
                                    name="nombre" 
                                    value="{{ old('nombre', $docente->nombre)}}">
                            
                    </div>
                    <div class="form-group">
                            <label for="apellido">Apellidos</label>
                                    <input class="form-control border-0 bg-light shadow-sm"
                                    id="apellido"
                                    type="text"
                                    name="apellido" 
                                    value="{{ old('apellido', $docente->apellido)}}">
                            
                    </div>
                    <div class="form-group">
                            <label for="ci">Carnet de Identidad</label>
                                    <input class="form-control border-0 bg-light shadow-sm"
                                    id="ci"
                                    type="text"
                                    name="ci" 
                                    value="{{ old('ci', $docente->ci)}}">
                            
                    </div>
                    <div class="form-group">
                            <label for="celular">Celular</label>
                                    <input class="form-control border-0 bg-light shadow-sm"
                                    id="celular"
                                    type="text"
                                    name="celular" 
                                    value="{{ old('celular', $docente->celular)}}">      
                    </div>
                     <div class="form-group">
                            <label for="direccion">Direccion</label>
                                    <input class="form-control border-0 bg-light shadow-sm"
                                    id="direccion"
                                    type="text"
                                    name="direccion" 
                                    value="{{ old('direccion', $docente->direccion)}}">      
                    </div>
                    <div class="form-group">
                            <label for="sexo">Sexo</label>
                                    <select class="form-control border-0 bg-light shadow-sm"
                                    id="sexo"
                                    name="sexo" >
                                    <option value="Maculino">Maculino</option>
                                    <option value="Femenino">Femenino</option>
                                    </select>    
                    </div>
                    <div class="form-group">
                            <label for="projec_id">Taller</label>
                                    <select class="form-control border-0 bg-light shadow-sm"
                                    id="project_id"
                                    name="project_id" >
                                    @foreach($talleres as $taller)
                                    <option value="{{ $taller->id}}">
                                        {{  $taller->title }} 
                                    </option>
                                    @endforeach
                                    </select>      
                    </div>
                    
                    
       
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

 <a class="btn btn-dark btn-block" 
 href="{{ route('Docentes.index') }}">
                   Cancelar
                   </a>