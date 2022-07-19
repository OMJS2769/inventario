@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Productos</div>
                <div class="card-body">
                    <div class="float-right">
                        <button onclick='createProduct();' class="btn btn-primary">
                            <span class="icon-plus"></span>
                            Crear producto
                        </button>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio de compra</th>
                                <th>Precio de venta</th>
                                <th>Stock</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <img src="https://laravel-livewire.com/img/twitter.png" width="120" height="120">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>${{ $product->purchase_price }}</td>
                                    <td>${{ $product->sale_price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        {{-- <button class="btn btn-info btn-block" style="color:white;">
                                            <span class="icon-price-tag"></span>
                                            Crear venta
                                        </button>
                                        <br/> --}}
                                        <button class="btn btn-warning btn-block" style="color:white;">
                                            <span class="icon-pencil"></span>
                                            Editar
                                        </button>
                                        <br/>
                                        <button class="btn btn-danger btn-block">
                                            <span class="icon-bin"></span>
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('product.create')
<script>
    const createProduct = () => $("#modal_create_product").modal('show');
</script>
@endsection
