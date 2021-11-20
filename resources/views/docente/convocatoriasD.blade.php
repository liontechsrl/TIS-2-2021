@extends('layouts.plantillaD')
@section('content')
<nav class="navbar">
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
              <li><a href="{{ url('/docente/dashboard') }}">Inicio</a></li>
              <li><a href="{{ route('docente.convocatoriasD') }}">Agregar convocatoria</a></li>
              <li><a href="{{ route('docente.avisosD') }}">Agregar Avisos</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
              </ul>
            </div>
          </nav>
          @endsection
 @section('cuerpo')
         <div class="container mt-5 formulario">
          <h1>CONVOCATORIA</h1>
          <form class="row g-3">
            <div class="col-md-4">
              <label for="firstName" class="form-label">Titulo:</label>
              <input type="text" class="form-control" name="name" >
            </div>
            <div class="container">
              <div class=" col-md-2">
                <label  class="form-label">Codigo:</label>
                <input name="codigo"type="text" class="form-control" >
              </div> 
              <div class="col-md-1">Año:
                <select name="gestion" class="form-control" >
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                </select>
              </div>
            </div>
            <div class="col-md-2"> Elegir semestre :
           
              <select name = "semestre" class="form-control ">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
            
          </div>
            
            
            
           
           
            <div Style="margin-top: 40px;" >
            <label for="convocatoria" >Elegir Documento:</label>
            <input name= "archivo" type="file" name="convocatoria" id="convocatoria">
            

            </div>

            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" class="btn btn-primary" style="background-color: #215f88;">Publicar</button>
              
            </div>
          </form>
      </div>
      @endsection
     