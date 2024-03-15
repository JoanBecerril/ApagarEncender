<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\incidencias;
use App\Models\subcategorias;
use App\Models\sedes;

class ClienteController extends Controller
{



//  PAGINAS PRINCIPALES

    public function admin()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('nom_sede');
        $incidencias = Incidencias::all();
        return view('admin', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias'));
    }

    public function gestorequipo()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('nom_sede');
        $incidencias = Incidencias::all();
        return view('gestorequipo', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias'));
    }

    public function tecnico()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('nom_sede');
        $incidencias = Incidencias::all();
        return view('tecnico', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias'));
    }

    public function cliente()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('nom_sede');
        $incidencias = Incidencias::all();
        return view('cliente', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias'));
    }






    // PAGINA VER INDICENCIA EN GRANDE

    public function incidencia($id)
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('nom_sede');
        $incidencia = Incidencias::find($id);
        return view('incidencia', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencia'));
    }





    // PAGINA PREACION PAGINA NUEVA

    public function nueva()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('nom_sede');
        $subcategorias = subcategorias::distinct()->pluck('id');
        $incidencias = Incidencias::all();
        return view('nueva', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias', 'subcategorias'));
    }

    public function nuevaIncidencia(Request $request)
    {
        $request->validate([
            'name_incid' => 'required|string|max:30',
            'desc_incid' => 'required|string',
            'id_subcat' => 'required|string',
        ]);

        $userId = session('user_id');
        $idSede = session('id_sede');

        $incidencia = new incidencias();
        $incidencia->name_incid = $request->name_incid;
        $incidencia->desc_incid = $request->desc_incid;
        $incidencia->prioridad_incid = '4';
        $incidencia->estado_incid = '1';
        // $incidencia->id_tecnico = 'NULL'; (NULL PORQUE NO TIENE TECNICO ASIGNADO)
        $incidencia->id_cliente = $userId;
        // $incidencia->id_sede = '1';
        $incidencia->id_sede = $idSede;
        $incidencia->id_subcat = $request->id_subcat;
        $incidencia->save();

        return redirect()->route('cliente')->with('success', 'Incidencia creada exitosamente');
    }


    // FILTRO NUEVOS ANTIGUOS

    public function incidenciasAntiguas()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('sede_nombre');
        $incidencias = Incidencias::orderBy('id', 'asc')->get();
        return view('cliente', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias'));
    }

    public function incidenciasNuevas()
    {
        $userId = session('user_id');
        $userNombre = session('name_usr');
        $userApell = session('apell_usr');
        $rolUser = session('rol_usr');
        $idSede = session('id_sede');
        $idSubcat = session('id_subcat');
        $fechaCreada = session('created_at');
        $fechaActualiz = session('updated_at');
        $sedeNombre = session('sede_nombre');
        $incidencias = Incidencias::orderBy('id', 'desc')->get();
        return view('cliente', compact('userId', 'userNombre', 'rolUser', 'idSede', 'sedeNombre', 'userApell', 'idSubcat', 'fechaCreada', 'fechaActualiz', 'incidencias'));
    }
}
