@extends('layout')

@section('title','Revista')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                        <h3 for="cbcategoria" class="h3-responsive text-primary">Categoria</h3>
                        <select id="cbcategoria" class="form-control align-self-center categorias" onchange="url(this.value)">
                                <option selected value="RevistaGeneral.html">Todas las fotos</option>    
                                <option value="#">Hombres</option>
                                <option value="#">Niños</option>
                                <option value="#">Mujeres</option>
                        </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <script>
                $(document).ready(function(){
                $('.zoom').hover(function() {
                        $(this).addClass('transition');
                }, function() {
                        $(this).removeClass('transition');
                });
                });
        </script>
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                        <img class="zoom " src="img/Modelos/Revista/1.jpg" alt="Femenino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                        <img class="zoom" src="img/Modelos/Revista/2.jpg" alt="Masculino" width="250">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Revista/3.jpg" alt="Femeninos" width="250"> 
            </div>
    </div>
    <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Mujeres/5.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Mujeres/2.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Mujeres/3.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
     <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Mujeres/6.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Mujeres/7.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Mujeres/8.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Revista/4.jpg" alt="Masculino" width="185">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Revista/5.jpg" alt="Femenino" width="180">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Revista/6.jpg" alt="Femenino" width="200"> 
            </div>
    </div>
     <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Hombres/1.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Hombres/2.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Hombres/3.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
     <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Mujeres/9.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Hombres/5.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Hombres/6.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
     <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Hombres/7.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Hombres/8.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Hombres/9.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
    <hr>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Revista/7.jpg" alt="Niños" width="200">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Revista/8.jpg" alt="Niños" width="200">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Revista/9.jpg" alt="Niños" width="200"> 
            </div>
    </div>
     <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Niños/1.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Niños/2.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Niños/3.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
    <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Niños/4.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Niños/5.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Niños/6.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
    <br>
     <div class="row">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                       <img class="zoom" src="img/Modelos/Niños/7.jpg" alt="Masculino" width="210">
            </div> 
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">                    
                       <img class="zoom" src="img/Modelos/Niños/8.jpg" alt="Femenino" width="210">
                                
            </div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                        <img class="zoom" src="img/Modelos/Niños/9.jpg" alt="Femenino" width="210"> 
            </div>
    </div>
</div>
<br>
<hr>

@endsection