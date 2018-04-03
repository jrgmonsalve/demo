
    <div class="form-group row">
      <label for="placa" class="col-sm-4 col-form-label">Placa</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="placa" name="placa" value={{ isset($vehiculo->placa) ? $vehiculo->placa : ''}}>
      </div>
    </div>
    <div class="form-group row">
      <label for="color" class="col-sm-4 col-form-label">Color</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="color" name="color" value={{isset($vehiculo->color) ? $vehiculo->color : ''}}>
      </div>
    </div>
    <div class="form-group row">
        <label for="marca" class="col-sm-4 col-form-label">Marca</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="marca" name="marca" value={{isset($vehiculo->marca) ? $vehiculo->marca : ''}}>
        </div>
      </div>
    <div class="form-group row">
      <label for="tipo_vehiculo" class="col-sm-4 col-form-label">Tipo vehiculo</label>
        <div class="col-sm-8">
          <select class="form-control" name="tipo_vehiculo">
              <option value="particular">Particular</option>
              <option value="publico">Publico</option>
          </select>
        </div>
    </div>
    <div class="form-group row">
      <label for="conductor" class="col-sm-4 col-form-label">Conductor</label>
      <div class="col-sm-8">
        <select class="form-control" name="conductor_id">
            @foreach($conductors as $conductor)
                <option value="{{$conductor->id}}">{{$conductor->primer_nombre}}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="propietario" class="col-sm-4 col-form-label">Propietario</label>
      <div class="col-sm-8">
        <select class="form-control" name="propietario_id">
            @foreach($propietarios as $propietario)
                <option value="{{$propietario->id}}">{{$propietario->primer_nombre}}</option>
            @endforeach
        </select>
      </div>
    </div>
    
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="{{ route('vehiculos.index') }}"> cancelar</a>
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