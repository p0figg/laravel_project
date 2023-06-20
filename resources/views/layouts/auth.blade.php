@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
               @yield('auth.content')
            </div>
        </div>
    </div>
@endsection