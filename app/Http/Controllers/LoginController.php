<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email_usr' => 'required|email',
            'pwd_usr' => 'required|min:9|max:20',
        ], [
            'pwd_usr.required' => 'El campo contraseña es obligatorio',
        ]);

        $email_usr = trim($request->input('email_usr'));
        $password = trim($request->input('pwd_usr'));

        $user = Usuario::where('email_usr', $email_usr)->first();

        if (!$user || !Hash::check($password, $user->pwd_usr)) {
            return redirect()->back()->with('error', 'Credenciales incorrectas');
        } else {
            if (!$user->estado == 1) {
                return redirect()->back()->with('error', 'Consulte al administrador Acerca tus Credenciales');
            }
            session_start();
            // Asignar los valores a variables distintas
            
            $userId = $user->id;
            $userNombre = $user->name_usr;
            $userApell = $user->apell_usr;
            $rolUser = $user->rol_usr;
            $_SESSION['email'] = $user->email_usr;
            
            
            // Obtener los datos de la consulta
            $datos = Usuario::select('sedes.nom_sede', 'sedes.id')->join('sedes', 'usuarios.id_sede', '=', 'sedes.id')->where('usuarios.id', $userId)->first();
            $id_sede = $datos->id;
            $nom_sede = $datos->nom_sede;

            session()->put('user_id', $userId);
            session()->put('name_usr', $userNombre);
            session()->put('apell_usr', $userApell);
            session()->put('rol_usr', $rolUser);

            if ($rolUser == 1) {
                return redirect()->route('admin')->with('success', '¡Credenciales correctas! Bienvenido.');
            } elseif ($rolUser == 2) {
                return redirect()->route('gestorequipo')->with('success', '¡Credenciales correctas! Bienvenido.');
            } elseif ($rolUser == 3) {
                return redirect()->route('tecnico')->with('success', '¡Credenciales correctas! Bienvenido.');
            } elseif ($rolUser == 4) {
                return redirect()->route('cliente')->with('success', '¡Credenciales correctas! Bienvenido.');
            }
        }
    }
}
