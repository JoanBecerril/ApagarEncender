@extends('layouts.plantilla')
@section('title', 'On-Off')
@section('content')

    <div class="top">
        <div class="filtros">
            <select name="" id="filtroestado">
                <option value="">Sin asignar</option>
                <option value="">Asignada</option>
                <option value="">En Trabajo</option>
                <option value="">Resuelto</option>
                <option value="">Cerrada</option>
            </select>


            <a href="{{ route('cliente.nuevas') }}"><button><i class="fa-solid fa-arrow-down-wide-short fa-flip-hor1ontal"></i></button></a>
            <a href="{{ route('cliente') }}"><button class="calendario"><i class="fa-regular fa-calendar"></i></button></a>
            <a href="{{ route('cliente.antiguas') }}"><button><i class="fa-solid fa-arrow-up-short-wide"></i></button></a>


            <button id="AbrirCerrarOjo"><i class="fa-solid fa-lock"></i> <i class="fa-solid fa-eye-slash"></i></button>
        </div>
        <div class="topder">
            <a href="{{ route('nueva') }}"><button><i class="fa-solid fa-plus"></i> Crear Incidencia</button></a>
        </div>
    </div>

    <div id="cliente" class="cliente-container">
        @foreach ($incidencias as $incidencia)
            <div class="clienteIncidencias @if ($incidencia->estado_incid == 5) cerrada @endif">
                <div class="izq">
                    <div class="masinfo">
                        <h3>{{ $incidencia->name_incid }}</h3>
                        <a href="{{ route('incidencia', $incidencia->id) }}">
                            <button><i class="fa-solid fa-circle-info"></i> Info</button>
                        </a>
                    </div>
                    <p>{{ $incidencia->desc_incid }}</p>
                </div>
                <div class="der1">
                    <p><i class="fa-solid fa-tag fa-xl"></i> {{ $incidencia->id_subcat }}</p>
                    <p><i class="fa-solid fa-tags fa-xl"></i> {{ $incidencia->id_subcat }}</p>
                    <p><i class="fa-regular fa-calendar fa-xl"></i> {{ $incidencia->updated_at }}</p>
                    <p><i class="fa-regular fa-calendar-plus fa-xl"></i> {{ $incidencia->created_at }}</p>
                </div>

                <div class="der2">
                    <div class="prioridad">
                        <select name="prioridad" id="prioridad" disabled>
                            <option value="4" {{ $incidencia->prioridad_incid == 4 ? 'selected' : '' }}>Valorando
                            </option>
                            <option value="1" {{ $incidencia->prioridad_incid == 1 ? 'selected' : '' }}>Baja
                            </option>
                            <option value="2" {{ $incidencia->prioridad_incid == 2 ? 'selected' : '' }}>Media
                            </option>
                            <option value="3" {{ $incidencia->prioridad_incid == 3 ? 'selected' : '' }}>Alta
                            </option>
                        </select>
                        @if ($incidencia->prioridad_incid == 4)
                            <i class="fa-regular fa-star"></i> <i class="fa-regular fa-star"></i> <i
                                class="fa-regular fa-star"></i>
                        @else
                            @if ($incidencia->prioridad_incid == 1)
                                <i class="estrellaverde fa-solid fa-star"></i> <i
                                    class="estrellaverde fa-regular fa-star"></i> <i
                                    class="estrellaverde fa-regular fa-star"></i>
                            @elseif ($incidencia->prioridad_incid == 2)
                                <i class="estrellaamarilla fa-solid fa-star"></i> <i
                                    class="estrellaamarilla fa-solid fa-star"></i> <i
                                    class="estrellaamarilla fa-regular fa-star"></i>
                            @elseif ($incidencia->prioridad_incid == 3)
                                <i class="estrellaroja fa-solid fa-star"></i> <i class="estrellaroja fa-solid fa-star"></i>
                                <i class="estrellaroja fa-solid fa-star"></i>
                            @endif
                        @endif
                    </div>

                    <div class="estado">
                        <div class="iconoEstado">
                            @if ($incidencia->estado_incid == 1)
                                <i class="fa-solid fa-user-slash"></i>
                            @else
                                @if ($incidencia->estado_incid == 2)
                                    <i class="fa-solid fa-user-tag"></i>
                                @elseif ($incidencia->estado_incid == 3)
                                    <i class="fa-solid fa-user-gear"></i>
                                @elseif ($incidencia->estado_incid == 4)
                                    <i class="fa-solid fa-check"></i>
                                @elseif ($incidencia->estado_incid == 5)
                                    <i class="fa-solid fa-lock"></i>
                                @endif
                            @endif
                        </div>
                        <select name="estado" id="estado" disabled>
                            <option value="1" {{ $incidencia->estado_incid == 1 ? 'selected' : '' }}>Sin asignar
                            </option>
                            <option value="2" {{ $incidencia->estado_incid == 2 ? 'selected' : '' }}>Asignada</option>
                            <option value="3" {{ $incidencia->estado_incid == 3 ? 'selected' : '' }}>En Trabajo
                            </option>
                            <option value="4" {{ $incidencia->estado_incid == 4 ? 'selected' : '' }}>Resuelta</option>
                            <option value="5" {{ $incidencia->estado_incid == 5 ? 'selected' : '' }}>Cerrada</option>
                        </select>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('AbrirCerrarOjo');
            const incidenciasContainer = document.getElementById('cliente');

            button.addEventListener('click', function() {
                incidenciasContainer.classList.toggle('hideClosedIncidences');

                const incidenciasOcultas = incidenciasContainer.classList.contains('hideClosedIncidences');

                if (incidenciasOcultas) {
                    button.innerHTML = '<i class="fa-solid fa-lock"></i> <i class="fa-solid fa-eye"></i>';
                } else {
                    button.innerHTML =
                        '<i class="fa-solid fa-lock"></i> <i class="fa-solid fa-eye-slash"></i>';
                }
            });
        });
    </script>
@endsection
