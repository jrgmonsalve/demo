
    <div class="form-group row">
      <label for="numero_cedula" class="col-sm-4 col-form-label">Numero cedula</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="numero_cedula" name="numero_cedula" value={{ isset($propietario->numero_cedula) ? $propietario->numero_cedula : ''}}>
      </div>
    </div>
    <div class="form-group row">
      <label for="primer_nombre" class="col-sm-4 col-form-label">Primer Nombre</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" value={{isset($propietario->primer_nombre) ? $propietario->primer_nombre : ''}}>
      </div>
    </div>
    <div class="form-group row">
        <label for="segundo_nombre" class="col-sm-4 col-form-label">Segundo Nombre</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value={{isset($propietario->segundo_nombre) ? $propietario->segundo_nombre : ''}}>
        </div>
      </div>
    <div class="form-group row">
      <label for="apellidos" class="col-sm-4 col-form-label">Apellidos</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="apellidos" name="apellidos" value={{isset($propietario->apellidos) ? $propietario->apellidos : ''}}>
      </div>
    </div>
    <div class="form-group row">
      <label for="direccion" class="col-sm-4 col-form-label">Direccion</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="direccion" name="direccion" value={{isset($propietario->direccion) ? $propietario->direccion : ''}}>
      </div>
    </div>
    <div class="form-group row">
      <label for="telefono" class="col-sm-4 col-form-label">Telefono</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="telefono" name="telefono" value={{isset($propietario->telefono) ? $propietario->telefono : ''}}>
      </div>
    </div>
    <div class="form-group row">
      <label for="ciudad" class="col-sm-4 col-form-label">Ciudad</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="ciudad" name="ciudad" value={{isset($propietario->ciudad) ? $propietario->ciudad : ''}}>
      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="{{ route('propietarios.index') }}"> cancelar</a>
      </div>
    </div>
    @if(count($errors))
    <div class="form-group row">
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>
              {{$error}}
            </li>
          @endforeach
        </ul>
      </div>      
    </div>
  @endif