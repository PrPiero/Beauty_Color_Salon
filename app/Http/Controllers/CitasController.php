<?php

namespace App\Http\Controllers;
use App\Models\Quote;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function index(){
        return view('citas.index');
    }

    public function create(){
        return view('citas.create');
    }

    public function store(Request $request){

        $Citas = new Quote();
        $Citas->client = $request->cliente;
        $Citas->phone = $request->telefono;
        $Citas->email = $request->email;
        $Citas->date = $request->fecha;
        $Citas->description = $request->descripcion;
        $Citas->state = "Pendiente";
        $Citas->save();

        return redirect()->route('citas.create')->with('MENSAJE','YA SE RESERVO SU CITA.. LO LLAMAREMOS');
    }

    public function show(){

    }
}
