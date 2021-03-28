<table class="table table-striped" style="width: 50%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Materia</th>
      <th scope="col">Carga Horaria</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($materias as $materia)
    <tr>
    <th scope="row">{{$materia->id }}</th>
      <td>{{$materia->name}}</td>
      <td>{{$materia->carga_horaria}} Horas</td>
      </tr>
    @endforeach
       
  </tbody>
</table>