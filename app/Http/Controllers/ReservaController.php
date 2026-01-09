<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Servicio;

class ReservaController extends Controller
{
    // 1) Página /reservas -> muestra calendario según lo último seleccionado
    public function index()
    {
        $tipo = session('reserva.tipo');
        $id   = session('reserva.id');

        if (!$tipo || !$id) {
            // No hay selección previa: mostramos la vista con aviso
            return view('reservas.index', [
                'tipo' => null,
                'item' => null,
                'horas' => [],
            ]);
        }

        $item = $tipo === 'curso'
            ? Curso::findOrFail($id)
            : Servicio::findOrFail($id);

        // Horas ejemplo (luego lo conectas a disponibilidad real)
        $horas = ['10:00','11:00','12:00','16:00','17:00','18:00'];

        return view('reservas.index', compact('tipo', 'item', 'horas'));
    }

    // 2) Cuando pulsan "Reservar" en un curso/servicio
    // Guarda selección y manda a /reservas
    public function select($tipo, $id)
    {
        if (!in_array($tipo, ['curso', 'servicio'])) abort(404);

        session([
            'reserva.tipo' => $tipo,
            'reserva.id'   => (int) $id,
        ]);

        return redirect()->route('reservas');
    }

    // 3) Confirmar reserva
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|in:curso,servicio',
            'id'   => 'required|integer',
            'hora' => 'required|string',
            'fecha'=> 'required|date',
        ]);

        // Aquí luego guardarás en BD la reserva real
        return redirect()->route('reservas')->with('success', 'Reserva confirmada.');
    }
}
