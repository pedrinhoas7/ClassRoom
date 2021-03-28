@extends('layouts.aluno.app')

@section('content')
<div class="row">
  @include('aluno.menuLateral')
    <div class="col-sm" >
      <h5>materia</h5>
        @include('materia.materiasCard')
    </div>
    <div class="col-sm">
rank
  </div>
@endsection
