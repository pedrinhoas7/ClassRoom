<div class="container-fluid">
<Table class="table table table-responsive" >   
@foreach ($professores as $professor)
<td>
<div class="card" style="width: 320px; height: 400px;">
<img src="/storage/geografia.jfif" class="css-class" alt="alt text">
  <div class="card-body">
    <p class="card-text">Materia: {{$professor->name}}.</p>
    <p class="card-text">Rank: {{$professor->name}}</p>
    <i class="fas fa-cloud"></i>

    <a href="#" class="btn btn-primary">Link</a>
    <a href="#" class="btn btn-primary">Link</a>
  </div>
</div>
</td>
@endforeach 
</Table> 
</div>
