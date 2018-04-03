@extends('shell')
@section('content')
<div class="row">
    <div class="col-sm-12">
      <div class="full-right">
        <h2>Propietarios</h2>
      </div>
    </div>
  </div>
  
    <table class="table table-bordered">
      <tr>
        <th with="80px">No</th>
        <th>Cedula</th>
        <th>Nombres</th>
        <th  class="text-center">
          <a href="{{route('propietarios.create')}}" class="btn btn-success btn-sm">
              <i class="material-icons">add</i>
          </a>
        </th>
      </tr>
      <?php $no=1; ?>
      @foreach ($propietarios as $propietario)
        <tr>
          <td>{{$no++}}</td>
          <td>{{ $propietario->numero_cedula }}</td>
          <td>{{ $propietario->primer_nombre }}</td>
          <td>
            <a class="btn btn-warning btn-sm" href="{{route('propietarios.show',$propietario->id)}}">
                <i class="material-icons">remove_red_eye</i>
            </a>

            <a class="btn btn-primary btn-sm" href="{{route('propietarios.edit',$propietario->id)}}">
                <i class="material-icons">create</i>
            </a>
            <a class="btn btn-danger btn-sm" href="{{ route('propietarios.destroy', $propietario->id) }}"
                  onclick="event.preventDefault();
                            document.getElementById('delete-form').submit();">
                            <i class="material-icons">clear</i>
              </a>

              <form id="delete-form" action="{{ route('propietarios.destroy', $propietario->id) }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
              </form>

            

          </td>
        </tr>
      @endforeach
    </table>
  
@endsection