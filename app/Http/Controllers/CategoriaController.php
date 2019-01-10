<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{

    public function index()
    {
        return Categoria::all();
    }

    public function store(Request $request)
    {
        Categoria::create($request->all());
        return ['created' => true];
    }

    public function show($id)
    {
        return Categoria::find($id);
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());
        return ['updated' => true];
    }

    public function destroy($id)
    {
        Categoria::destroy($id);
        return ['deleted' => true];
    }
}

