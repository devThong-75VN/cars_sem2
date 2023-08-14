@extends('admin.layout')
@section('content')
<div class="row">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Product!</h1>
                            </div>
                            <form class="user" action="{{ route('admin.products.update','$product->id') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" id="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="desc" id="" class="form-control" cols="30" rows="10" placeholder="Description"></textarea>
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
    </div>
</div>
@endsection