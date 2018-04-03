@extends('shell')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="{{ route('vehiculos.store') }}">
              {{ csrf_field() }}
              @include('vehiculos.form_master')
            </form>
        </div>
      </div>
@endsection