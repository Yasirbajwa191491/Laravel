<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Contact Page</h3>
    @foreach($users as $user)
    <h2>{{$user}}</h2>
    @if($user=="Yasir")
    <h2>Admin</h2>
    @else
    <h2>Normal User</h2>
    @endif
    @endforeach
  
</body>
</html>

<script>
    const val=@json($users);
    console.log(val);
</script>