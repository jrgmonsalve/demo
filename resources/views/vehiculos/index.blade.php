@extends('shell')
@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="full-right">
        <h2>Vehiculos</h2>
      </div>
    </div>
  </div>
  
    <table class="table table-bordered">
      <tr>
        <th with="80px">No</th>
        <th>placa</th>
        <th>color</th>
        <th>marca</th>
        <th>tipo vehiculo</th>
        <th>conductor</th>
        <th>propietario</th>
        <th  class="text-center">
          <a href="{{route('vehiculos.create')}}" class="btn btn-success btn-sm">
              <i class="material-icons">add</i>
          </a>
        </th>
      </tr>
      <?php $no=1; ?>
      @foreach ($vehiculos as $vehiculo)
        <tr>
          <td>{{$no++}}</td>
          <td>{{ $vehiculo->placa }}</td>
          <td>{{ $vehiculo->color }}</td>
          <td>{{ $vehiculo->marca }}</td>
          <td>{{ $vehiculo->tipo_vehiculo }}</td>
          <td>{{ $vehiculo->conductor->primer_nombre.' '.$vehiculo->conductor->segundo_nombre.' '.$vehiculo->conductor->apellidos }}</td>
          <td>{{ $vehiculo->propietario->primer_nombre.' '.$vehiculo->propietario->segundo_nombre.' '.$vehiculo->propietario->apellidos }}</td>
          <td>
            <a class="btn btn-warning btn-sm" href="{{route('vehiculos.show',$vehiculo->id)}}">
                <i class="material-icons">remove_red_eye</i>
            </a>

            <a class="btn btn-primary btn-sm" href="{{route('vehiculos.edit',$vehiculo->id)}}">
                <i class="material-icons">create</i>
            </a>
            <a class="btn btn-danger btn-sm" href="{{ route('vehiculos.destroy', $vehiculo->id) }}"
                  onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();">
                            <i class="material-icons">clear</i>
              </a>

              <form id="delete-form" action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
              </form>

            

          </td>
        </tr>
      @endforeach
    </table>
  
@endsection