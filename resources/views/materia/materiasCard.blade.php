<div class="container-fluid"> 
<Table class="table table table-responsive" >
@foreach ($materias as $materia)
<td>
<div class="card"  style="width: 320px; height: 400px;">
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
</td>
@endforeach 
</Table> 
</div>
