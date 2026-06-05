<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio', [
            'nombre' => 'Tu Nombre Completo',
            'carrera' => 'Ingenieria de Sistemas',
            'semestre' => 'Sexto semestre',
            'anio' => date('Y'),
        ]);
    }

    public function sobreMi()
    {
        $habilidades = [
            'PHP' => 75,
            'HTML/CSS' => 90,
            'JavaScript' => 60,
            'Laravel' => 55,
            'GIT' => 70,
        ];

        return view('sobre-mi', [
            'nombre' => 'Julian Quispe Ramos',
            'carrera' => 'Ingenieria de Sistemas',
            'semestre' => 'Sexto semestre',
            'habilidades' => $habilidades,
        ]);
    }

    public function materias()
{
    $materias = Materia::all();

    $promedio = round($materias->avg(function (Materia $materia) {
        return $materia->getNota();
    }) ?? 0, 2);

    $aprobadas = $materias->filter(function (Materia $materia) {
        return $materia->estaAprobada();
    })->count();

    return view('materias', [
        'materias' => $materias,
        'promedio' => $promedio,
        'aprobadas' => $aprobadas,
    ]);
}

    public function contacto()
    {
        return view('contacto');
    }

    public function procesarContacto(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|min:3|max:100',
            'email' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        return redirect()->route('contacto')
            ->with('exito', 'Tu mensaje fue enviado correctamente.');
    }
}