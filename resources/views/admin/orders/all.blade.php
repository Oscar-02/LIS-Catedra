@extends('admin.base')

@section('content')
<div class="header">
    <br>
    <h1 class="display-5"><b>Ordenes</b></h1>
</div>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Productos Ordenados</th>
            <th scope="col">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->SKU }}</th>
                <td>{{ $product->productName }}</td>
                <td>{{ '$' . number_format($product->price, 2) }}</td>
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
                    @php
                        foreach ($offers as $offer) {
                            if($offer->id == $product->offerID)
                                echo(($offer->discount * 100) . '%');
                        }
                    @endphp
                </td>
                <td>
                    <button type="button" id="{{ $product->SKU }}-edit" class="btn btn-warning">Editar</button>
                    <button type="button" id="{{ $product->SKU }}-delete" class="btn btn-danger">Eliminar</button>

                </td>
            </tr>

        @endforeach --}}
    </tbody>
</table>
@endsection
