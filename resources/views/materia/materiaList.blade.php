<style>
.table {
   display: block !important;
}
</style>
<div class="container-fluid">
<div class="card">
<p style="margin-left: 5px;">
      <a href="{{$materias->previousPageUrl()}}" >Previous</a>

      <a href="{{$materias->nextPageUrl()}}" >Next</a>
</p>
<div>
<table class="table table table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Materia</th>
      <th scope="col">Carga Horaria</th>
      <th scope="col">Aula</th>
      <th scope="col">Videos</th>
      <th scope="col">Provas</th>
    </tr>
  </thead>
  <tbody>   
    @foreach ($materias as $materia)
    <tr>
    <th scope="row">{{$materia->id }}</th>
      <td><a href="/materia?id={{$materia->id}}">{{$materia->name}}</a></td>
      <td>{{$materia->carga_horaria}} Horas</td>
      <td></i><i class="bi bi-people"></i></td>
      <td><i class="bi bi-file-earmark-play-fill"></td>
      <td><i class="bi bi-list-task"></i></td>
      </tr>
    @endforeach  
  </tbody> 
</table>

</div>
<p style="margin-left: 5px;">
      <a href="{{$materias->previousPageUrl()}}" >Previous</a>
 
      <a href="{{$materias->nextPageUrl()}}"  >Next</a>
</p>
</div>
</div>