@extends('admin.master')

@section('body')

    <main>
        <div class="container py-5">
            <div class="card card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>

                        <th>Actions</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->email }}</td>

                        <td>
                            <a href="{{ route('update-user', ['id' => $product->id]) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="{{ route('delete-user', ['id' => $product->id]) }}" class="btn btn-sm btn-danger"
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
