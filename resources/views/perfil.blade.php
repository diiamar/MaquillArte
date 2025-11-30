@extends('layouts.app')

@section('title', 'Mi Perfil')

@section('content')

<div class="container py-5">
    <div class="card p-4 shadow" style="max-width:650px;margin:auto;border-radius:20px;">

        <h2 class="mb-4 fw-bold" style="color:#ff4da6;">Mi Perfil</h2>

        <p><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>

        <hr>

        <a href="/mis-compras" class="btn btn-rosa">Ver historial de compras</a>

    </div>
</div>

@endsection
