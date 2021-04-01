@extends('layouts.professor.app')
<head>
<style>
  </style>
</head>
@section('content')
@include('professor.MenuLateral')
<div>
      <h5>Minhas Materias</h5>
        @include('materia.materiaList')
      </div>
      @include('anuncios.anunciosList')
</div>

@endsection
