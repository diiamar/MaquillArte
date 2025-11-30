@extends('layouts.app')

@section('title', 'Calendario')

@section('content')

<div class="container py-5">

    <h1 class="fw-bold mb-4">Calendario de la maquilladora</h1>

    <p class="text-muted">Haz clic para bloquear días, arrastra para bloquear horas.</p>

    <div id="calendar"></div>

</div>

<!-- ESTILOS -->
<style>
    #calendar {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
</style>

<!-- SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    let calendarEl = document.getElementById('calendar');

    let calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [
            FullCalendar.dayGridPlugin, 
            FullCalendar.timeGridPlugin, 
            FullCalendar.interactionPlugin
        ],

        initialView: 'dayGridMonth',
        selectable: true,
        editable: true,

        events: "{{ route('panel.eventos') }}",

        dateClick(info) {
            if(confirm('¿Bloquear este día?')) {
                fetch('/panel/bloquear-dia', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ fecha: info.dateStr })
                }).then(() => calendar.refetchEvents());
            }
        },

        select(info) {
            if(info.startStr === info.endStr) return;

            let ok = confirm('¿Bloquear este rango horario?');

            if(ok) {
                fetch('/panel/bloquear-hora', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        fecha: info.startStr.split("T")[0],
                        hora_inicio: info.startStr.split("T")[1],
                        hora_fin: info.endStr.split("T")[1],
                    })
                }).then(() => calendar.refetchEvents());
            }
        }

    });

    calendar.render();
});
</script>

@endsection
