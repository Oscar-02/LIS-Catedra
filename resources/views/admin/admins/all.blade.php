@extends('admin.base')

@section('content')
    <div class="header">
        <br>
        <h1 class="display-5"><b>Usuarios Administradores</b></h1>
        <button type="button" class="btn btn-success">Añadir</button>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo Empresarial</th>
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
