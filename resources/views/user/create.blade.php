@extends('layouts.app')

@section('content')
    <h1>create user</h1>

    <form action="{{ route('user.store') }}" method="post">
        @csrf


        <input class="form-control mb-2" name="name" placeholder="Name">


        <input class="form-control mb-2" name="email" placeholder="Email">


        <input class="form-control mb-2" type="password" name="password" placeholder="Password">


        <button class="btn btn-success">

            Save

        </button>
    </form>
@endsection
