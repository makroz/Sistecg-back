<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
  public function index()
  {
    $lista = Persona::All();
    return response()->json($lista);
  }

  public function store(Request $request)
  {
    $persona = Persona::create($request->all());
    return response()->json(['status' => 'ok', 'data' => $persona]);
  }

  public function show($id)
  {
    $persona = Persona::find($id);
    return response()->json(['status' => 'ok', 'data' => $persona]);
  }

  public function update(Request $request, Persona $persona)
  {
    $persona->update($request->all());
    return response()->json(['status' => 'ok']);
  }

  public function destroy(Persona $persona)
  {
    $persona->delete();
    return response()->json(['status' => 'ok']);
  }
}