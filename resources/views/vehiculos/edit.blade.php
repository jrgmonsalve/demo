@extends('shell')
@section('content')
<div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form method="POST" action="{{ route('vehiculos.update', $vehiculo->id) }}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              @include('vehiculos.form_master')
          </form>
        </div>
      </div>
@endsection