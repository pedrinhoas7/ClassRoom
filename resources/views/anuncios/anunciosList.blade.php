<div class="container-fluid">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach ($anuncios as $anuncio)
    <div class="carousel-item {{$anuncios[0] === $anuncio ? 'active' : ''}}">
      <img  src="/storage/matematica.jfif" alt="First slide" >
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$anuncio->nome}}</h5>
        <p>{{$anuncio->valor}}</p>
      </div>
    </div>
  @endforeach
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>