<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propietarios;

class PropietariosController extends Controller
{

    public function index()
    {
        $propietarios = Propietarios::all();
        return view('propietarios.index',compact('propietarios'));
    }

    public function create()
    {
        return view('propietarios.create');
    }

    
    public function store(Request $request)
    {
        
        $validacion = $request->validate([
            'numero_cedula'=>'required|string|max:128',
            'primer_nombre'=>'required|string|max:128',
            'segundo_nombre'=>'required|string|max:128',
            'apellidos'=>'required|string|max:128',
            'direccion'=>'required|string|max:128',
            'telefono'=>'required|string|max:128',
            'ciudad'=>'required|string|max:128',
            
          ]);
          //dd( $request->input('numero_cedula'));
          Propietarios::create($request->all());
          return redirect()->route('propietarios.index')->with('success','Propietario creado con exito');
    }

    
    public function show($id)
    {
        $propietario = Propietarios::find($id);
        return view('propietarios.show',compact('propietario'));
    }

    
    public function edit($id)
    {
        $propietario = Propietarios::find($id);
        return view('propietarios.edit',compact('propietario'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'numero_cedula'=>'required|string|max:128',
            'primer_nombre'=>'required|string|max:128',
            'segundo_nombre'=>'required|string|max:128',
            'apellidos'=>'required|string|max:128',
            'direccion'=>'required|string|max:128',
            'telefono'=>'required|string|max:128',
            'ciudad'=>'required|string|max:128',
          ]);
          Propietarios::find($id)->update($request->all());
          return redirect()->route('propietarios.index')->with('success','Propietario actualizado con exito');
    }


    public function destroy($id)
    {
        Propietarios::find($id)->delete();
        return redirect()->route('propietarios.index')->with('success','Propietario borrado con exito');
    }
}
