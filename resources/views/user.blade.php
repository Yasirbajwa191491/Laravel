<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
    <title>User</title>
</head>
<body>
    <!-- <x-header name="Yasir Sohail" /> -->
    <x-navbar   />
    <h2>About Page</h2>
   
        @foreach($posts as $post)
        <div class="card" style="width: 18rem;">
  <img src="https://pixabay.com/images/id-1869401/" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post['title']}}</h5>
    <p class="card-text">{{$post["body"]}}</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>
</div>

        @endforeach
   
</body>
</html>
   <script>
    const val=@json($posts);
    console.log(val);
   </script>