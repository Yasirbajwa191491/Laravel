<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <!-- <x-header name="Yasir Sohail" /> -->
    <x-navbar   />
    <h2>About Page</h2>
      <h2>{{URL::current()}}</h2>
      <h2>{{URL::full()}}</h2>
      <h2>{{URL::previous()}}</h2>
      <a href="{{URL::to('/save')}}">Redirect</a>
      
</body>
</html>
   