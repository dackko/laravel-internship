@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
            @csrf
            <label>Title
                <input type="text" name="title" placeholder="Title">
            </label> <br/>
            <label> Description <br/>
                <textarea name="description" placeholder="Description" rows="5" minlength="300"></textarea>
            </label>
            <br/>
            <label>Image</label>
            <input type="file" name="featured_image">
            <br />
            <input type="submit" value="Create Post">
        </form>
    </div>
@endsection
