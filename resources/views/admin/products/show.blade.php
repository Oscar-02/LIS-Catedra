@extends('admin.base')

@section('content')
    <div class="header">
        <br>
        <h1 class="display-5"><b>Productos</b></h1>
    </div>
    <div class="card">
        <div class="card-header">
            SKU #{{ $product->SKU }}
            <h4>{{ $product->productName }}</h4>

            <a href="{{route('admin-products-edit', $product->SKU)}}" class="btn btn-warning">Editar</a>
            <a href="{{ route('admin-products-delete', $product->SKU) }}" class="btn btn-danger">Eliminar</a>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <span class="input-group-text">Descripcion</span>
                <textarea class="form-control" aria-label="With textarea" disabled>{{ $product->description }}</textarea>
                <span class="input-group-text">Categoria</span>
                <input type="text" class="form-control" value="{{ $category->categoryName }}" disabled
                    aria-label="Username" aria-describedby="basic-addon1">

            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" value="{{ number_format($product->price, 2) }}" disabled
                    aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">Oferta Aplicada</span>
                <input type="text" class="form-control" value="-{{ $offer->discount * 100 }}% {{ $offer->offerName }}"
                    disabled aria-label="Username" aria-describedby="basic-addon1">
                <span class="input-group-text">Stock Disponible</span>
                <input type="text" class="form-control" value="{{$stock}}"
                    disabled aria-label="Username" aria-describedby="basic-addon1">

            </div>
        </div>
    </div>
@endsection
