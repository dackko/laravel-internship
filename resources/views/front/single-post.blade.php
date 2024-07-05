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
            <div class="row">
                <div class="col-8" style="background: white; box-shadow: 0 0 3px black;padding: 5px; margin: 5px">
                    <h1>{{ $post->title }}</h1>
                    <img src="{{ asset('storage/posts/'.$post->featured_image) }}" style="height: 200px">
                    <p>{{ $post->description }}</p>

                    <p>Author: <span>{{ $post->Author->name }}</span></p>
                </div>
                <div class="col-3" style="background: white; box-shadow: 0 0 3px black;padding: 5px;margin: 5px">yyyyyyy</div>
            </div>
        </div>


    </div>
</div>







</html>
