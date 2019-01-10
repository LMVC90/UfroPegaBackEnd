<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;

class OfertaController extends Controller
{

    public function index()
    {
        return Oferta::all();
    }

    public function store(Request $request)
    {
        Oferta::create($request->all());
        return ['created' => true];
    }

    public function show($id)
    {
        return Oferta::find($id);
    }

    public function update(Request $request, $id)
    {
        $oferta = Oferta::find($id);
        $oferta->update($request->all());
        return ['updated' => true];
    }

    public function destroy($id)
    {
        Oferta::destroy($id);
        return ['deleted' => true];
    }
}
