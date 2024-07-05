@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Featured Image</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->Category->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ Str::limit($post->description, 50) }}</td>
                            <td><img style="width: 50px; border: 1px solid black;" src="{{ asset('storage/posts/'.$post->featured_image) }}"></td>
                            <td>{{ $post->Author->name }}</td>
                            <td>
                                <a href="{{ route('admin.posts.edit', $post->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('admin.posts.destroy', $post->id) }}"><i class="fas fa-times" style="color:red"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection
