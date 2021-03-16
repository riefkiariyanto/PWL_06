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
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class=' table responsive '> 
                        <tr><th>username</th><th>:</th><td>{{$user->username}}</td></tr>
                        <tr><th>name</th><th>:</th><td>{{$user->name}}</td></tr>
                        <tr><th>email</th><th>:</th><td>{{$user->email}}</td></tr>
                        <tr><th>Created</th><th>:</th><td>{{$user->created_at}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
