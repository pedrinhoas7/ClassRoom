<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Materia</th>
      <th scope="col">Valor</th>
      <th scope="col">Carga Horaria</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    @foreach ($materias as $materia)
    <th scope="row">{{$materia->id }}</th>
      <td>{{$materia->name}}</td>
      <td>{{$materia->valor}}</td>
      <td>{{$materia->carga_horaria}} Horas</td>
    @endforeach
      
    </tr>
  </tbody>
</table>