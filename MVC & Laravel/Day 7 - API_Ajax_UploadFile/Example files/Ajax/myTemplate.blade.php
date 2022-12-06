<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/flowers">Flower list</a>
            </li>
            <li>
                <a href="/flowers/create">Create new flower</a>
            </li>
            @if (!session('email'))
                <li>
                    <a href="/register">Register</a>
                </li>
                <li>
                    <a href="/login">Login</a>
                </li>
            @else
                <li>
                    <a href="/logout">Logout</a>
                </li>
            @endif
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    @yield('js')
</body>

</html>
