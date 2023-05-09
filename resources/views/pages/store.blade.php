@extends('assets.header')

@section('content')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <div class="container">
        <div class="row">

            @foreach ($products as $product)
                <div class="col p-2">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ URL::asset('img/img-8.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->productName }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($offers as $offer)
                                @if ($offer->id == $product->offerID)
                                    @if ($product->offerID == 1)
                                        <li class="list-group-item">
                                            <span class="text-bg-primary">${{ number_format($product->price, 2) }}</span>
                                        </li>
                                    @else
                                        <li class="list-group-item">
                                            <span class="text-bg-danger">${{ number_format($product->price - ($product->price * $offer->discount), 2) }}</span>
                                            <span class="text-bg-primary text-decoration-line-through">${{ number_format($product->price, 2) }}</span>
                                            <span class="text-bg-warning">{{$offer->discount * 100}}% OFF</span>
                                        </li>
                                    @endif
                                @endif
                            @endforeach
                            <li class="list-group-item">Disponibles:
                                @foreach ($stocks as $stock)
                                    @if ($stock->productSKU == $product->SKU)
                                        {{ $stock->quantity }}
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary"><span
                                    class="material-symbols-outlined">shopping_cart</span></a>
                            <a href="#" class="btn btn-outline-primary"><span
                                    class="material-symbols-outlined">visibility</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
