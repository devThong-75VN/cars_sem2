@extends('admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 text-gray-800" style="text-align: center;font-weight: 900;">User List</h1>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center;font-weight: 900;">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @foreach ($userList as $user)
                        <tr>
                            <td>{{ increment($i) }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a type="submit" class="btn btn-warning" href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection
