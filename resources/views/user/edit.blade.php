@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2 class="fw-bold text-warning">
             Edit User
            </h2>

            <a href="{{ route('user.index') }}" class="btn btn-secondary">
                ← Back
            </a>

        </div>

        @if ($errors->any())
            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif

        <!-- Card -->
        <div class="card shadow-sm border-0">

            <div class="card-header bg-warning text-dark">

                <h5 class="mb-0">
                    Update User Information
                </h5>

            </div>

            <div class="card-body">

                <form action="{{ route('user.update', $user->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Full Name
                        </label>

                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $user->name) }}">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label class="form-label fw-semibold">
                            Email
                        </label>

                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $user->email) }}">

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-semibold">
                            New Password
                        </label>

                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Leave blank if you don't want to change it">

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <small class="text-muted">
                            Leave this field blank if you don't want to change the password.
                        </small>

                    </div>

                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-warning">
                            Update
                        </button>

                        <a href="{{ route('user.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection
