@extends('admin.layout')
@section('content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg ">
        <div class="card-body ">
            <!-- Nested Row within Card Body -->
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Product!</h1>
                    </div>
                    <form class="user" action="{{ route('admin.products.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" name="name" class="form-control form-control-user" id="" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" class="form-control" cols="30" rows="10" placeholder="Desccription"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="quantity" id="" class="form-control" cols="30" rows="10" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <input name="price" id="" class="form-control" cols="30" rows="10" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <select name="transmission" class="form-control" cols="30" rows="10">
                                <option value="Manual">Manual Transmission</option>
                                <option value="Automatic">Automatic Transmission</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="fueltype" class="form-control" cols="30" rows="10" placeholder="Fuel Type">
                                <option value="diesel">Diesel Oil</option>
                                <option value="gasonline">GasOnline</option>
                                <option value="electric">Electric Enegry</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="year" id="" class="form-control" cols="30" rows="10" placeholder="Year">
                        </div>
                        <div class="form-group">
                            <select name="category_id" class="form-control" cols="30" rows="10" placeholder="Category Name">
                                @foreach($categoryList as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection