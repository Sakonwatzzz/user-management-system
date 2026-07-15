@extends('layouts.app')


@section('content')
    <h2>User Management</h2>


    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">

        Add User

    </a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <table class="table table-bordered">


        <thead>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Email</th>

                <th>Create Date</th>

                <th>Action</th>

            </tr>

        </thead>



        <tbody>


            @foreach ($users as $user)
                <tr>


                    <td>
                        {{ $user->id }}
                    </td>


                    <td>
                        {{ $user->name }}
                    </td>


                    <td>
                        {{ $user->email }}
                    </td>


                    <td>
                        {{ $user->created_at }}
                    </td>


                    <td>


                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">

                            Edit

                        </a>



                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline">


                            @csrf

                            @method('DELETE')


                            <button class="btn btn-danger">

                                Delete

                            </button>


                        </form>


                    </td>


                </tr>
            @endforeach


        </tbody>


    </table>
@endsection
