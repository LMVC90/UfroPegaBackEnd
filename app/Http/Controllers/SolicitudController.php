<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class SolicitudController extends Controller
{

    public function index()
    {
        return Solicitud::all();
    }

    public function store(Request $request)
    {
        Solicitud::create($request->all());
        return ['created' => true];
    }

    public function show($id)
    {
        return Solicitud::find($id);
    }

    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);
        $solicitud->update($request->all());
        return ['updated' => true];
    }

    public function destroy($id)
    {
        Solicitud::destroy($id);
        return ['deleted' => true];
    }
}
