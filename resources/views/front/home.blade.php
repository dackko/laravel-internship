<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        html,body {
            background: #ccc;
        }
    </style>

</head>



<div class="container">
    <div class="row">

        <div class="container">
            <div class="row align-items-start">

                @foreach($posts as $post)
                    {{--  Template   --}}
                    <div class="col" style="margin: 5px;">
                        <div class="card" style="width: 14rem;">
                            <img class="card-img-top" src="{{ asset('storage/posts/'.$post->featured_image) }}" alt="{{ $post->title }}" style="max-height: 160px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::limit($post->description, 50) }}</p>
                                <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                <p>Author: <span>{{ $post->Author->name }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    </div>
</div>







</html>
