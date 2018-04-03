@extends('shell')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Propietario</h2>
            </div>
            <div class="pull-right">
                <br/>
                <a class="btn btn-primary" href="{{ route('propietarios.index') }}"> <i class="material-icons">arrow_back</i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre : </strong>
                {{ $propietario->primer_nombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cedula : </strong>
                {{ $propietario->numero_cedula}}
            </div>
        </div>
    </div>
@endsection