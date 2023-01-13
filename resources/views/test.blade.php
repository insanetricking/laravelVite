<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{route('register')}}" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <input type="text" name='username' placeholder="Username">
        <input type="password" name='password' placeholder="Password">
        <input type="text" name='name' placeholder="Name">
        <input type="date" name='birthday' placeholder="Birthday">

        <button type="submit">Register</button>
    </form>
</body>

</html>
