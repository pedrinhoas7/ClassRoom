@extends('layouts.professor.app')

@section('content')
    <div class="row">
        <div class="col-sm-1-5">
                    @include('professor.MenuLateral')
        </div>
        <div class="col-sm-6" style=" margin-left: 30px;">
            <h5>Meus Cursos</h5>
                    @include('materia.materiaList')
        </div>
    </div>
@endsection
