@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                            @csrf

                          Title
                                <input class="form-control" type="text" name="title" placeholder="Title">
                           <br/>
                            Description <br/>
                                <textarea class="form-control" name="description" placeholder="Description" rows="5" minlength="300"></textarea>
                            <br/>

                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <br />
                            <label>Image</label>
                            <input type="file" name="featured_image">
                            <br />
                            <input type="submit" class="btn btn-primary mb-2 form-control" value="Create Post">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
