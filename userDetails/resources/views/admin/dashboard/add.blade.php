@extends('admin.master')

@section('body')

    <main>
        <div class="container-fluid px-4 py-5">
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Add Product Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row p-1">
                                    <input type="text" name="name" class="form-control p-2" placeholder="Product Name">
                                </div>
                                <div class="row p-1">
                                    <input type="text" name="category_name" class="form-control p-2" placeholder="Category Name">
                                </div>
                                <div class="row p-1">
                                    <input type="text" name="brand_name" class="form-control p-2" placeholder="Brand Name">
                                </div>
                                <div class="row p-1">
                                    <textarea name="description" id="" cols="30" rows="7" class="form-control"
                                              placeholder="Add Product Description"></textarea>
                                </div>
                                <div class="row p-1">
                                    <label for="" class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" name="image" class="form-control p-2" placeholder="Product Image">
                                    </div>
                                </div>
                                <div class="row p-1">
                                    <label for="" class="col-md-3">Status</label>
                                    <div class="col-md-9">
                                        <label for=""><input type="radio" name="status" value="0">Unpublished </label>
                                        <label for=""><input type="radio" name="status" value="1">Published </label>
                                    </div>
                                </div>


                                <div class="row p-1">
                                    <input type="submit" class="col-md-2 btn btn-primary">
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
