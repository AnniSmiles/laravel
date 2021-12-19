<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shualeduri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="d-flex mb-5">
        @auth
            <a href="/" class="pr-3">Home</a>
            <a href="/admin">Admin Panel</a>
            <form method="post" action="{{ route("logout") }}">
                @csrf
                <button class="btn btn-link">Sign Out</button>
            </form>
        @endauth
        @guest
            <a href="/login" class="pr-3">Login</a>
            <a href="/register">Register</a>
        @endguest

    </div>
    @yield('content')
</div>
</body>
</html>
