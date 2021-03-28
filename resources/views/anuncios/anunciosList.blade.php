@foreach ($anuncios as $anuncio)

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$anuncio->nome}}</h5>
    <p class="card-text">{{$anuncio->descricao}}.</p>
    <a href="{{$anuncio->link}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endforeach