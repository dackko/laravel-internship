@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
                            @csrf

                            Title
                            <input class="form-control" type="text" name="title" placeholder="Title" value="{{ $post->title }}">
                            <br/>
                            Description <br/>
                            <textarea class="form-control" name="description" placeholder="Description" rows="5" minlength="100">{{ $post->description }}</textarea>
                            <br/>

                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id === $post->category_id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <br />
                            <label>Image</label>
                            <img src="{{ asset('storage/posts/'.$post->featured_image) }}" style="height: 100px;"> <br />
                            <input type="file" name="featured_image">
                            <br />
                            <input type="submit" class="btn btn-primary mb-2 form-control" value="Update Post">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
