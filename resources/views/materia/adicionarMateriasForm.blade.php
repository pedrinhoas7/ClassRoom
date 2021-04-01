<div class="card">
    <div class="card-header">Adicionar Materia</div>
<form method="POST" action="{{ route('materia/create') }}">
    @csrf
<label class="col-sm-2 col-form-label">Nome</label>
    <input class="form-control" type="text" name="name">
<label class="col-sm-3 col-form-label">Descrição</label>
    <input class="form-control" type="text" name="descricao">
<label class="col-sm-3 col-form-label">Carga Horaria</label>
    <input class="form-control" type="number" step="0.01" name="carga_horaria">
<label class="col-sm-2 col-form-label">Valor</label>
    <input class="form-control" type="number" step="0.01" name="valor">

<div class="card-body">
        <button type="submit">+</button>      
    </div>
</form>
    </div>