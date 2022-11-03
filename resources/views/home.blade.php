@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
                        </div>
                    @endif

                    <div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
