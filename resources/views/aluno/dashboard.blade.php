@extends('layouts.aluno.app')
<head>
<style>
  .materia {
  width: 92%;
  margin-left: 18px;
}
  </style>
</head>
@section('content')

<div class="materia">
  <div class="row">
  <div class="col-sm-2">
        @include('aluno.menuLateral')
    </div>
    <div class="col-sm-8" >
    <h5>Minhas Materias</h5>
    @include('materia.materiasCard') 
    </div>
    <div class="col-sm-2">
    <h5>Anuncios</h5>
    @include('anuncios.anunciosList') 
    </div>
  </div>
</div>
@endsection
