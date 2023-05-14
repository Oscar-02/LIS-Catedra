@extends('admin.base')

@section('content')
    <div class="header">
        <br>
        <h1 class="display-5"><b>Añadir Productos</b></h1>
    </div>
    <form action="{{route('admin-products-store')}}" method="post" autocomplete="off">
        @csrf

        <div class="card">
            <div class="card-header">
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text" id="basic-addon1">SKU (generado automaticamente)</span>
                    <span class="input-group-text" id="basic-addon1">Nombre del producto</span>
                    <input type="text" class="form-control" placeholder="Nombre del producto" required name="productName"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text">Descripcion</span>
                    <textarea class="form-control" placeholder="Descripcion del producto" name="description"
                    aria-label="With textarea"></textarea>
                    <span class="input-group-text">Stock Inicial</span>
                    <input type="text" class="form-control" required min="1" step="2" value="1" name="stock">
                    <span class="input-group-text">Categoria</span>
                    <select class="form-select" id="inputGroupSelect01" name="category" required>
                        <option value="0" selected>Seleccione...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Precio base</span>
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" required min="0.01" step="0.01" value="0.01" name="price" required>
                    <span class="input-group-text">Oferta</span>
                    <select class="form-select" id="inputGroupSelect01" name="offer" required>
                        @foreach ($offers as $offer)
                            <option value="{{ $offer->id }}">{{ $offer->offerName }} ({{$offer -> discount * 100}}%)</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
    </div>
@endsection
