<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;
use App\Propietarios;
use App\Conductors;

class VehiculosController extends Controller
{

    public function index()
    {
        $vehiculos = Vehiculos::all();
        return view('vehiculos.index',compact('vehiculos'));
    }

    public function create()
    {
        $propietarios = Propietarios::all();
        $conductors = Conductors::all();
        //dd($propietarios);
        return view('vehiculos.create',compact('vehiculo','conductors','propietarios'));
    }

    
    public function store(Request $request)
    {
        
        $validacion = $request->validate([
            'placa'=>'required|string|max:6',
            'color'=>'required|string|max:128',
            'marca'=>'required|string|max:128',
            'tipo_vehiculo'=>'required|string|max:128',
            'conductor_id'=>'required|exists:conductors,id',
            'propietario_id'=>'required|exists:propietarios,id',
            
          ]);
          //dd( $request->input('numero_cedula'));
          Vehiculos::create($request->all());
          return redirect()->route('vehiculos.index')->with('success','Vehiculo creado con exito');
    }

    
    public function show($id)
    {
        $vehiculo = Vehiculos::find($id);
        return view('vehiculos.show',compact('vehiculo'));
    }

    
    public function edit($id)
    {
        $vehiculo = Vehiculos::find($id);
        $propietarios = Propietarios::all();
        $conductors = Conductors::all();
        return view('vehiculos.edit',compact('vehiculo','conductors','propietarios'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'placa'=>'required|string|max:6',
            'color'=>'required|string|max:128',
            'marca'=>'required|string|max:128',
            'tipo_vehiculo'=>'required|string|max:128',
            'conductor_id'=>'required|exists:conductors,id',
            'propietario_id'=>'required|exists:propietarios,id',
          ]);
          Vehiculos::find($id)->update($request->all());
          return redirect()->route('vehiculos.index')->with('success','Vehiculo actualizado con exito');
    }


    public function destroy($id)
    {
        Vehiculos::find($id)->delete();
        return redirect()->route('vehiculos.index')->with('success','Vehiculo borrado con exito');
    }
}
