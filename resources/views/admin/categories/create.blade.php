@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                            @csrf
                            <label>Name
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </label> <br />
                            <input type="submit" class="btn btn-primary mb-2" value="Create Category">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
