<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($professores as $professor)
    <tr>
        <th scope="row">{{$professor->id}}</th>
        <td>{{$professor->name }}</td>
        <td>{{$professor->email }}</td>
    </tr>
    
    @endforeach
      
    
  </tbody>
</table>