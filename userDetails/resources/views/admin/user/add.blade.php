@extends('admin.master')

@section('body')

    <main>
        <div class="container-fluid px-4 py-5">
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <form action="{{ route('new-user') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Full Name</h4>
                            </div>
                            <div class="card-body">
                                <div class="row p-1">
                                    <input type="text" name="name" class="form-control p-2" placeholder="Full Name">
                                </div>
                                <div class="row p-1">
                                    <input type="text" name="email" class="form-control p-2" placeholder="User Email">
                                </div>
                                <div class="row p-1">
                                    <input type="text" name="password" class="form-control p-2" placeholder="Password">
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
