<h1>Lista de Productos</h1>

<a href="{{ route('productos.create') }}">Crear producto manual</a>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <button type="submit">Crear producto de prueba</button>
</form>
<a href="{{ route('productos.stock-alto') }}" class="btn btn-success mb-3">
    Ver productos con stock > 5
</a>

<table border="1" cellpadding="6">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoría</th>
        <th>Creado</th>
    </tr>

    @foreach($productos as $p)
    <tr>
        <td>{{ $p->nombre }}</td>
        <td>{{ $p->precio }}</td>
        <td>{{ $p->stock }}</td>
        <td>{{ $p->categoria }}</td>
        <td>{{ $p->created_at }}</td>
    </tr>
    @endforeach
</table>
