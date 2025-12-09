@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Productos con Stock Mayor a 5</h2>

    <a href="{{ route('productos.index') }}" class="btn btn-primary mb-3">
        Volver a todos los productos
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
