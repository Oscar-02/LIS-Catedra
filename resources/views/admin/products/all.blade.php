@extends('admin.base')

@section('content')
    <div class="header">
        <br>
        <h1 class="display-5"><b>Productos</b></h1>
        <a class="btn btn-success" href="">Añadir</a>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">SKU</th>
                <th scope="col">Stock</th>
                <th scope="col">Nombre del producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Oferta</th>
                <th scope="col">Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->SKU }}</th>
                    <td class="text-end">
                        @php
                           foreach ($stocks as $stock) {
                            if ($stock->productSKU == $product->SKU)
                                echo($stock->quantity);
                           }
                        @endphp
                    </td>
                    <td>{{ $product->productName }}</td>
                    <td>{{ '$' . number_format($product->price, 2) }}</td>
                    <td class="text-center">
                        @php
                            foreach ($offers as $offer) {
                                if($offer->id == $product->offerID)
                                    echo(($offer->discount * 100) . '%');
                            }
                        @endphp
                    </td>
                    <td>
                        @php
                            foreach ($categories as $category) {
                                if ($category->id == $product->categoryID){
                                    echo($category->categoryName);
                                }
                            }
                        @endphp
                    </td>
                    <td>
                        <a href="{{route('admin-products-show', $product->SKU)}}" class="btn btn-info">Ver</a>
                        <a href="{{route('admin-products-edit', $product->SKU)}}" class="btn btn-warning">Editar</a>
                        <a href="{{route('admin-products-delete', $product->SKU)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection
