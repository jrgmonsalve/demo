@extends('shell')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="{{ route('conductors.store') }}">
              {{ csrf_field() }}
              @include('conductors.form_master')
            </form>
        </div>
      </div>
@endsection