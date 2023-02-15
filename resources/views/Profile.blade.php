@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div card-body>
                        <h1>Profile</h1>
                        {{-- {{ 'You are logged in ! --'.auth()->user()->name }} --}}
                        {{-- {{ 'You are logged in ! --'.auth()->user()->email }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
