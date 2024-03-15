@extends('layouts.plantilla')
@section('title', 'Crear Incidencia')
@section('content')

    <br>
    <a href="{{ route('cliente') }}"><i class="atras fa-solid fa-arrow-left fa-xl"></i></a>
    <br>

    <h2 class="titulosh2">Crear Indicencia</h2>

    <div id="nueva">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form class="nuevaIncidencia" id="nuevaIncidencia" action="{{ route('nuevaIncidencia') }}" method="POST">
            @csrf
            <label for="name_incid">Nombre incidencia:</label>
            <input type="text" id="name_incid" name="name_incid" value="{{ old('name_incid') }}" required>
            <br>
            <label for="desc_incid">Descripción incidencia:</label>
            <textarea id="desc_incid" name="desc_incid" rows="4" required>{{ old('desc_incid') }}</textarea>
            <br>
            <label for="id_subcat">Subcategoria incidencia:</label>
            <select id="id_subcat" name="id_subcat" required>
                @foreach($subcategorias as $subcategoria)
                    <option value="{{ $subcategoria }}" {{ old('id_subcat') == $subcategoria ? 'selected' : '' }}>
                        {{ $subcategoria }}
                    </option>
                @endforeach
            </select>
            <br>
            <button type="submit">Crear incidencia</button>
        </form>
    </div>

@endsection
