@extends('layouts.plantilla')



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
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/auth/login') }}">Iniciar Sesión</a></li>
            
          </ul>
        </div>
      </nav>
@endsection

@section('cuerpo')
<section>
        <div class="container mt-5 mb-5 ">
        <div class=" row d-flex justify-content-between cards ">
          <div class="col-sm-6">
            <h2 class="align-items-center avisos text-light">
              Publicacion de convocatoria TIS
            </h2>
            <div class="card ">

              <div class="card-body">
               @foreach ($convocatorias as $convocatorias)
                <h5 class="card-title text-ligth">{{$convocatorias->name }}</h5>
                
                <p class="card-text">link documentos {{$convocatorias->archivote }}</p>

                <p class="card-text">codigo: {{$convocatorias->codigo }}</p>
                <p class="card-text">Gestion: {{$convocatorias->gestion }}</p>
                <p class="card-text">Semestre: {{$convocatorias->semestre}}</p> 
                @endforeach 
              </div>
            </div>
          </div>

          <div class="col-sm-5 avisotes">
            <h2 class="align-items-center avisos text-light">
              Avisos
            </h2>



   <div class = "cars">
            <div class="cardazo">

              <div class="card-body">
         
             @foreach ($avisos as $avisos)
                <h5 class="card-title text-ligth">{{$avisos->name }}</h5>
                

                <p class="card-text">{{$avisos->descripcion }}</p>
                <p class="card-text">codigo: {{$avisos->codigo }}</p>
                <p class="card-text">Gestion: {{$avisos->gestion }}</p>
                <p class="card-text">Semestre: {{$avisos->semestre}}</p> 
                @endforeach 
              </div>
            </div>
           {{--  <div class="cardazo">

              <div class="card-body">
                <h5 class="card-title">Aviso importante   :</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

              </div>
            </div> --}}
            </div> 
          </div>
        </div>
      </div>
      </section>
      @endsection