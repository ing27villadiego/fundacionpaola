@extends('layouts.app')

@section('content')
<div class="contenedor-img">
    <img src="{{ asset('imagenes/building.svg') }}" alt="img-building">
</div>
<main>
<h1>
    nuestro sitio web se encuentra en construcción
</h1>
<div class="contenedor-box">
    <div class="box">
        <div class="box-number">
            <h2 id="dias"></h2>
        </div>
        <div class="box-time">
            Dias
        </div>
    </div>
    <div class="box">
        <div class="box-number">
            <h2 id="horas"></h2>
        </div>
        <div class="box-time">
            Horas
        </div>
    </div>
    <div class="box">
        <div class="box-number">
            <h2 id="minutos"></h2>
        </div>
        <div class="box-time">
            Minutos
        </div>
    </div>
    <div class="box">
        <div class="box-number">
            <h2 id="segundos"></h2>
        </div>
        <div class="box-time">
            Segundos
        </div>
    </div>
</div>
</main>
@endsection
