@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Dashboard</h1>
            <strong> {{ Auth::user()->name }}
            </strong>
            <p> yourlogin succees </p>
        </div>
    </div>
@endsection
