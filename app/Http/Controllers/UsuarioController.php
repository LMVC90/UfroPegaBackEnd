<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());
        return ['created' => true];
    }

    public function show($id)
    {
        return Usuario::find($id);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        return ['updated' => true];
    }

    public function destroy($id)
    {
        Usuario::destroy($id);
        return ['deleted' => true];
    }
}
