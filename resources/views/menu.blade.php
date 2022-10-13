@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Escull les opcions que mes t'agradin.</div>

                <div class="card-body">
                    <nav>
                        <ul style="word-spacing: 50pt">
                            <a href="/mostrarEquip">Equips</a>
                            <a href="/mostrarJugador">Jugadors</a>
                            <a href="/consultarOptions">Buscador</a>
                            <a href="/editar">Editar</a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
