<div class="row">
@foreach ($professores as $professor)
<div style="margin: 5px; width: 30%;">
<div class="card">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Materia: {{$professor->name}}.</p>
    <p class="card-text">Rank: {{$professor->score}}</p>
    <i class="fas fa-cloud"></i>

    <a href="#" class="btn btn-primary">Link</a>
    <a href="#" class="btn btn-primary">Link</a>
  </div>
</div>
</div>

@endforeach
</div>