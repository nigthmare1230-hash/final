<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Si vienen datos del formulario, crear manualmente
        if ($request->has('nombre')) {
            Producto::create($request->all());
        } else {
            // Crear producto de prueba
            Producto::create([
                'nombre' => 'Producto demo ' . rand(1, 100),
                'precio' => 19.99,
                'stock' => 10,
                'categoria' => 'General',
            ]);
        }

        return redirect()->route('productos.index');
    }
    public function stockAlto()
{
    // Traer productos con stock mayor a 5
    $productos = Producto::where('stock', '>', 5)->get();

    // Retornar vista con los productos filtrados
    return view('productos.stock-alto', compact('productos'));
}
}
