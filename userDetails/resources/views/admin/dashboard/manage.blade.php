@extends('admin.master')

@section('body')

    <main>
        <div class="container py-5">
            <div class="card card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <img src="{{ asset($product->image) }}" alt="" style="height: 100px; width: 100px">
                        </td>
                        <td>{{ $product->status == 0? 'Unpublished': 'Published' }}</td>
                        <td>
                            <a href="{{ route('update-product', ['id' => $product->id]) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure want to delete?')"
                            >
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>

@endsection
