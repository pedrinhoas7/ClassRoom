@if($materias)   
@foreach ($materias as $materia)
<div class="container-fluid"  >
<div class="card" >
<img src="/storage/geografia.jfif" class="css-class" alt="alt text">
  <div class="card-body">
    <p class="card-text">Materia: {{$materia->name}}.</p>
    <p class="card-text">Carga Horaria: {{$materia->carga_horaria}}.</p>
    <i class="fas fa-cloud"></i>

    <a href="#" class="btn btn-primary">Link</a>
    <a href="#" class="btn btn-primary">Link</a>
  </div>
</div>
</div>
@endforeach  
@else
      <td>Nada Por Aqui</td>        
@endif