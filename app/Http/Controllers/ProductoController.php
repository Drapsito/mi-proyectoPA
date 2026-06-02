<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = [
            [
                'nombre' => 'Laptop ASUS',
                'precio' => 5500.00,
                'categoria' => 'Electronica',
            ],
            [
                'nombre' => 'Mouse Redragon',
                'precio' => 125.50,
                'categoria' => 'Accesorios',
            ],
            [
                'nombre' => 'Teclado Generico',
                'precio' => 280.00,
                'categoria' => 'Accesorios',
            ],
            [
                'nombre' => 'Monitor Micronics',
                'precio' => 1890.00,
                'categoria' => 'Electronica',
            ],
            [
                'nombre' => 'Memoria SDD 520GB',
                'precio' => 550.00,
                'categoria' => 'Almacenamiento',
            ],
        ];

        $sumaPrecios = array_sum(array_column($productos, 'precio'));
        $precioPromedio = $sumaPrecios / count($productos);

        return view('productos', [
            'productos' => $productos,
            'precioPromedio' => $precioPromedio,
        ]);
    }
}