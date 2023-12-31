

@extends('admin.layout')
@section('title', 'Category')
@section('content')

<div class="container-fluid">
<h1>DATA CATEGORY</h1>
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 text-gray-800" style="text-align: center;font-weight: 900;">Category List</h1>
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
                            <th>Desc</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @foreach ($categoryList as $category)
                        <tr>
                            <td>{{ increment($i) }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a type="submit" class="btn btn-warning" href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
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
