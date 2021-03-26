@extends('layouts.professor.app')
<head>
<style>
  .materia {
  width: 150%;
  margin-left: 18px;
}
  </style>
</head>
@section('content')

<div class="materia">
  <div class="row">
  @include('professor.MenuLateral')
    <div class="col-sm">
      <h5>Meus Cursos</h5>
      @include('materia.materiaList')
    </div>
    <div class="col-sm">
      <h5>Rank</h5>
      @include('professor.rank')
    </div>
  </div>
</div>
@endsection
