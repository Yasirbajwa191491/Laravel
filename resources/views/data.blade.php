<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
    <title>Form-Laravel</title>
</head>
<body>
    <div class="container">
@if(session("user-email"))
   <h2>session email: {{session("user-email")}}</h2>
   @endif
<form action="del" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- {{ method_field('PUT') }} -->
    @method('DELETE')
  
  <div class="mb-3 m-auto">
    <label for="exampleInputPassword2" class="form-label">Upload file</label>
    <input type="file" name="file" class="form-control" id="exampleInputPassword2">
  </div>
  <div class="mb-3 m-auto">
    <label for="exampleInputPassword1" class="form-label">Enter Id for delete</label>
    <input type="number" name="id" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
<form action="send" method="POST">
    @csrf
    <!-- {{ method_field('PUT') }} -->
    <!-- @method('DELETE') -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 m-auto">
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword" autocomplete="off">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck">
    <label class="form-check-label" for="exampleCheck">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>