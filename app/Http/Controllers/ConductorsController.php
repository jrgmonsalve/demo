<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conductors;

class ConductorsController extends Controller
{

    public function index()
    {
        $conductors = Conductors::all();
        return view('conductors.index',compact('conductors'));
    }

    public function create()
    {
        return view('conductors.create');
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
          Conductors::create($request->all());
          return redirect()->route('conductors.index')->with('success','Conductor creado con exito');
    }

    
    public function show($id)
    {
        $conductor = Conductors::find($id);
        return view('conductors.show',compact('conductor'));
    }

    
    public function edit($id)
    {
        $conductor = Conductors::find($id);
        return view('conductors.edit',compact('conductor'));
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
          Conductors::find($id)->update($request->all());
          return redirect()->route('conductors.index')->with('success','Conductor actualizado con exito');
    }


    public function destroy($id)
    {
        Conductors::find($id)->delete();
        return redirect()->route('conductors.index')->with('success','Conductor borrado con exito');
    }
}
