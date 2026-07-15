@extends('layouts.app')

@section('content')
    <h1>edit user</h1>
    <form action="{{ route('user.update', $user) }}" method="post">
        @csrf

        @method('PUT')

        <input class="form-control mb-2" name="name" value="{{ $user->name }}">


        <input class="form-control mb-2" name="email" value="{{ $user->email }}">


        <input class="form-control mb-2" type="password" name="password" placeholder="New Password">


        <button class="btn btn-warning">

            Update

        </button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary mt-5">back</a>



    </form>
@endsection
