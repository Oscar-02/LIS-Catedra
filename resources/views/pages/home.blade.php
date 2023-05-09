@extends('assets.header')

@section('content')
<style>
    .carousel .carousel-item {
  height: 300px;
}

.carousel-inner .carousel-item img {
    position: absolute;
    object-fit: cover;
    top: 0;
    left: 0;
    min-height: 300px;
}
</style>
<div id="carouselExampleAutoplaying" class="carousel slide h-100" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL::asset('img/img-1.jpg')}}" class="d-block w-100 opacity-50" alt="...">
        <div class="carousel-caption">
            <h1>Vive la calidad, vive la belleza</h1>
            <p>Nuestros productos pasan por procesos rigurosos de alta calidad</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('img/img-3.jpg')}}" class="d-block w-100 opacity-50" alt="...">
        <div class="carousel-caption">
            <h1>Disponible cuando nos necesites</h1>
            <p>Entregas agilez para que disfrutes de tu producto en menor tiempo</p>
            <a href="{{route('store')}}" class="btn btn-lg btn-success">Ir a la tienda</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{URL::asset('img/logo.png')}}" alt="Hefestos">
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">En Hefesto entendemos que la compra de joyas es una experiencia única y especial para cada persona. Por esta razón, nos esforzamos por hacer que nuestros clientes se sientan cómodos en todo momento. Nuestra tienda está diseñada para crear un ambiente relajado y acogedor, donde puedas tomarte el tiempo necesario para encontrar la joya perfecta. También nos enorgullece brindar un gran servicio a nuestros clientes.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="{{route('store')}}" class="btn btn-primary btn-lg px-4 gap-3">Ir a la tienda</a>
        <a href="{{route('contact')}}" class="btn btn-outline-secondary btn-lg px-4">Contactanos</a>
      </div>
    </div>
  </div>

  <div class="row align-items-md-stretch m-5">
    <div class="col-md-6">
        <div class="card h-100 p-5 bg-light border rounded-3 mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{URL::asset('img/img-5.png')}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title">Combinaciones</h3>
                    <p class="card-text">De todo para todos. Ofrecemos alta variedad de productos para que todos puedan disfrutar de ello siempre que ellos lo requieran.</p>
                  </div>
                </div>
              </div>
          </div>
    </div>
    <div class="col-md-6">
        <div class="card h-100 p-5 bg-light border rounded-3 mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title">A la moda del momento</h3>
                    <p class="card-text">Siempre contamos con los productos de ultimo momento para que nuestros clientes puedan lucir la moda del momento.</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="{{URL::asset('img/img-7.jpg')}}" class="img-fluid rounded-start" alt="...">
                </div>
              </div>
          </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg" style="background-color: white;">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Una verdadera experiencia de lujos</h1>
        <p class="lead">Seras la envidia de muchos</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <a href="{{route('store')}}" class="btn btn-primary btn-lg px-4 gap-3">Empieza a comprar</a>
            <a href="{{route('contact')}}" class="btn btn-outline-secondary btn-lg px-4">Contactanos</a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="{{URL::asset('img/img-10.png')}}" alt="" width="720">
      </div>
    </div>
  </div>

@endsection