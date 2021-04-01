<div class="container-fluid">
@if($professores)   
@foreach ($professores as $professor)
<div class="row">
<div >
<div class="card" style="width: 300px;">
<img src="/storage/geografia.jfif" class="css-class" alt="alt text">
  <div class="card-body">
    <p class="card-text">Materia: {{$professor->name}}.</p>
    <p class="card-text">Rank: {{$professor->name}}</p>
    <i class="fas fa-cloud"></i>

    <a href="#" class="btn btn-primary">Link</a>
    <a href="#" class="btn btn-primary">Link</a>
  </div>
</div>
</div>
</div>
@endforeach
@else
      <td>Nada Por Aqui</td>        
@endif
</div>
