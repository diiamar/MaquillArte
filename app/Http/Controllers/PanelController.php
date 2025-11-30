<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disponibilidad;
use App\Models\DiaBloqueado;
use App\Models\HoraBloqueada;
use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;

class PanelController extends Controller
{
    public function index()
    {
        return view('panel.index');
    }



    /* ----------------------------------------
       DISPONIBILIDAD SEMANAL
    -----------------------------------------*/

    public function disponibilidad()
    {
        $disponibilidad = Disponibilidad::where('user_id', Auth::id())->get();
        return view('panel.disponibilidad', compact('disponibilidad'));
    }

    public function guardarDisponibilidad(Request $request)
    {
        Disponibilidad::where('user_id', Auth::id())->delete();

        foreach ($request->dias as $dia => $horas) {
            if ($horas['activo']) {
                Disponibilidad::create([
                    'user_id'    => Auth::id(),
                    'dia_semana' => $dia,
                    'hora_inicio'=> $horas['inicio'],
                    'hora_fin'   => $horas['fin'],
                ]);
            }
        }

        return back()->with('success', 'Disponibilidad guardada correctamente.');
    }



    /* ----------------------------------------
       DÍAS BLOQUEADOS
    -----------------------------------------*/

    public function diasBloqueados()
    {
        $dias = DiaBloqueado::where('user_id', Auth::id())->get();
        return view('panel.dias', compact('dias'));
    }

    public function agregarDia(Request $request)
    {
        DiaBloqueado::create([
            'user_id' => Auth::id(),
            'fecha'   => $request->fecha,
            'motivo'  => $request->motivo,
        ]);

        return back()->with('success', 'Día bloqueado.');
    }

    public function eliminarDia($id)
    {
        DiaBloqueado::find($id)->delete();
        return back()->with('success', 'Día desbloqueado.');
    }



    /* ----------------------------------------
       HORAS BLOQUEADAS
    -----------------------------------------*/

    public function horasBloqueadas()
    {
        $horas = HoraBloqueada::where('user_id', Auth::id())->get();
        return view('panel.horas', compact('horas'));
    }

    public function agregarHora(Request $request)
    {
        HoraBloqueada::create([
            'user_id'     => Auth::id(),
            'fecha'       => $request->fecha,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin'    => $request->hora_fin,
            'motivo'      => $request->motivo,
        ]);

        return back()->with('success', 'Hora bloqueada.');
    }

    public function eliminarHora($id)
    {
        HoraBloqueada::find($id)->delete();
        return back()->with('success', 'Hora desbloqueada.');
    }



    /* ----------------------------------------
       CALENDARIO
    -----------------------------------------*/

    public function calendario()
    {
        return view('panel.calendario');
    }

    public function eventos()
    {
        $user = auth()->id();

        // Días bloqueados
        $bloqueados = DiaBloqueado::where('user_id', $user)
        ->get()
        ->map(function ($d) {
            return [
                'title' => 'Día bloqueado',
                'start' => $d->fecha,
                'allDay' => true,
                'color' => '#ff4da6',
            ];
        });

        // Horas bloqueadas
        $horas = HoraBloqueada::where('user_id', $user)
        ->get()
        ->map(function ($h) {
            return [
                'title' => 'Bloqueado',
                'start' => $h->fecha . ' ' . $h->hora_inicio,
                'end'   => $h->fecha . ' ' . $h->hora_fin,
                'color' => '#000000',
            ];
        });

        // Reservas
        $reservas = Reserva::with('servicio')->where('user_id', $user)
        ->get()
        ->map(function ($r) {
            return [
                'title' => $r->servicio->nombre,
                'start' => $r->fecha . ' ' . $r->hora_inicio,
                'end'   => $r->fecha . ' ' . $r->hora_fin,
                'color' => '#4d79ff',
            ];
        });

        return response()->json(
            $bloqueados->merge($horas)->merge($reservas)
        );
    }

    public function bloquearDia(Request $request)
    {
        DiaBloqueado::create([
            'user_id' => auth()->id(),
            'fecha' => $request->fecha,
            'motivo' => 'Bloqueado desde calendario',
        ]);

        return response()->json(['ok' => true]);
    }

    public function bloquearHora(Request $request)
    {
        HoraBloqueada::create([
            'user_id' => auth()->id(),
            'fecha' => $request->fecha,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
        ]);

        return response()->json(['ok' => true]);
    }
}
