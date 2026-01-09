@extends('layouts.app')

@section('title', 'Reservas')

@section('content')
<div class="container py-4">

    <h2 class="fw-bold mb-3" style="color:#ff4da6;">Reservas</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(!$tipo || !$item)
        <div class="alert alert-warning">
            Para ver el calendario primero entra a un <b>curso</b> o <b>servicio</b> y pulsa <b>Reservar</b>.
        </div>
        <div class="d-flex gap-2 flex-wrap">
            <a class="btn btn-rosa" href="{{ route('cursos') }}">Ver cursos</a>
            <a class="btn btn-rosa" href="{{ route('servicios.index') }}">Ver servicios</a>
        </div>
    @else
        <div class="text-muted mb-3">
            Estás reservando:
            <span class="fw-semibold">
                {{ $tipo === 'curso' ? 'Curso' : 'Servicio' }} - {{ $item->titulo ?? $item->nombre ?? $item->name }}
            </span>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="card shadow-sm border-0" style="border-radius:20px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Elige una fecha</h5>

                        <input type="date" id="fecha" class="form-control" value="{{ now()->toDateString() }}">
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border-0" style="border-radius:20px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Horas disponibles</h5>

                        <form method="POST" action="{{ route('reservas.store') }}" id="formReserva">
                            @csrf
                            <input type="hidden" name="tipo" value="{{ $tipo }}">
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="fecha" id="fechaHidden" value="{{ now()->toDateString() }}">

                            <div class="d-grid gap-2 mb-3">
                                @foreach($horas as $hora)
                                    <label class="btn btn-outline-dark text-start">
                                        <input type="radio" name="hora" value="{{ $hora }}" class="form-check-input me-2" required>
                                        {{ $hora }}
                                    </label>
                                @endforeach
                            </div>

                            <button class="btn btn-rosa w-100">Confirmar reserva</button>
                        </form>

                        <script>
                            document.getElementById('fecha').addEventListener('change', function () {
                                document.getElementById('fechaHidden').value = this.value;
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
@endsection
