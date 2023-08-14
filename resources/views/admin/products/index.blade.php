

@extends('admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 text-gray-800" style="text-align: center;font-weight: 900;">Product List</h1>
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
                            <th>Slug</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Tranmission</th>
                            <th>Fuel Type</th>
                            <th>Year</th>
                            <th>Category_id</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 0 @endphp
                        @foreach ($productList as $product)
                        <tr>
                            <td>{{ increment($i) }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->transmission }}</td>
                            <td>{{ $product->fueltype }}</td>
                            <td>{{ $product->year }}</td>
                            <td>{{ $product->category_id }}</td>
                            <td>
                                <a type="submit" class="btn btn-warning" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
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
