{{-- @extends('layouts.app') 


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
@extends('adminlte::page')

@section('title', 'ticdwem')

    @section('content_header')
        <h1>dashboard</h1>
    @stop
        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

    @section('content')
        <h3>welcome to this beautiful admin panel</h3>
    @stop


    @section('js')
    <script>console.log('hi');</script>
    @stop