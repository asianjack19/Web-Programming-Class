<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test page</title>
</head>
<body>
    Users: <br>
    @foreach ($users as $user)
        name: {{$user->name}}<br>
        email: {{$user->email}}<br><br>
    @endforeach
</body>
</html>