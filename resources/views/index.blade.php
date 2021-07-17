@extends('layouts.app')

@section('content')
@include('components.preloader')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('You are logged in!') }}
                        </div>
                    @else
                        {{ __('You are logged out!') }}
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
