<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Welcome {{auth()->user()->username}}</p>
    <form action="/users/logout" method="POST" class="inline">
        @csrf
        <button type="submit" class="">
            <i class="fa-solid fa-door-closed"></i> Logout
        </button>
    </form>
</body>
</html>