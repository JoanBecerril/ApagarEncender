@extends('layouts.plantilla')
@section('title', 'Cliente - Incidencia')
@section('content')

    <br>
    <a href="{{ route('cliente') }}"><i class="atras fa-solid fa-arrow-left fa-xl"></i></a>
    <br>

    <h2 class="titulosh2">{{ $incidencia->name_incid }}</h2>

    <div id="incidencia">
        <div class="incidenciaInfo">

            <div class="arribaInfo">
                <h2>{{ $incidencia->name_incid }}</h2>
                <h4>{{ $incidencia->desc_incid }}</h4>
            </div>

            <div class="abajoInfo">
                <div class="izqInfo">
                    <p><i class="fa-solid fa-tag fa-xl"></i> {{ $incidencia->id_subcat }}</p>
                    <p><i class="fa-solid fa-tags fa-xl"></i> {{ $incidencia->id_subcat }}</p>
                    <p><i class="fa-regular fa-calendar fa-xl"></i> {{ $incidencia->updated_at }}</p>
                    <p><i class="fa-regular fa-calendar-plus fa-xl"></i> {{ $incidencia->created_at }}</p>
                </div>

                <div class="derInfo">
                    <div class="prioridadInfo">
                        <div class="estrellas">
                            @if ($incidencia->prioridad_incid == 4)
                                <i class="fa-regular fa-star fal-xl"></i> <i class="fa-regular fa-star fal-xl"></i> <i
                                    class="fa-regular fa-star fal-xl"></i>
                            @else
                                @if ($incidencia->prioridad_incid == 1)
                                    <i class="estrellaverde fa-solid fa-star fal-xl"></i> <i
                                        class="estrellaverde fa-regular fa-star fal-xl"></i> <i
                                        class="estrellaverde fa-regular fa-star fal-xl"></i>
                                @elseif ($incidencia->prioridad_incid == 2)
                                    <i class="estrellaamarilla fa-solid fa-star fal-xl"></i> <i
                                        class="estrellaamarilla fa-solid fa-star fal-xl"></i>
                                    <i class="estrellaamarilla fa-regular fa-star fal-xl"></i>
                                @elseif ($incidencia->prioridad_incid == 3)
                                    <i class="estrellaroja fa-solid fa-star fal-xl"></i> <i
                                        class="estrellaroja fa-solid fa-star fal-xl"></i>
                                    <i class="estrellaroja fa-solid fa-star fal-xl"></i>
                                @endif
                            @endif
                        </div>

                        <select name="prioridadInfo" id="prioridadInfo" disabled>
                            <option value="4" {{ $incidencia->prioridad_incid == 4 ? 'selected' : '' }}>Valorando
                            </option>
                            <option value="1" {{ $incidencia->prioridad_incid == 1 ? 'selected' : '' }}>Baja
                            </option>
                            <option value="2" {{ $incidencia->prioridad_incid == 2 ? 'selected' : '' }}>Media
                            </option>
                            <option value="3" {{ $incidencia->prioridad_incid == 3 ? 'selected' : '' }}>Alta
                            </option>
                        </select>
                    </div>

                    <div class="estado">
                        <div class="iconoEstado">
                            @if ($incidencia->estado_incid == 1)
                                <i class="fa-solid fa-user-slash fal-xl"></i>
                            @else
                                @if ($incidencia->estado_incid == 2)
                                    <i class="fa-solid fa-user-tag fal-xl"></i>
                                @elseif ($incidencia->estado_incid == 3)
                                    <i class="fa-solid fa-user-gear fal-xl"></i>
                                @elseif ($incidencia->estado_incid == 4)
                                    <i class="fa-solid fa-check fal-xl"></i>
                                @elseif ($incidencia->estado_incid == 5)
                                    <i class="fa-solid fa-lock fal-xl"></i>
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

        </div>
    </div>
@endsection
