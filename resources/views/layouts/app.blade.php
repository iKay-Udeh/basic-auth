<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-900">
    <header class="bg-cool-gray-300">
        <nav class="rounded-lg flex justify-between">
            <ul class="m-2 p-2 flex">
                <li class="p-2 text-xs lg:text-lg font-bold text-gray-50">
                    <a href="#">Home</a>
                </li>
                <li class="p-2 text-xs lg:text-lg font-bold text-gray-50">
                    <a href="#">Posts</a>
                </li>
            </ul>
            <ul class="m-2 p-2 flex">
                @auth
                <li class="p-2 text-xs lg:text-lg font-bold text-gray-50">
                    <span>{{ Auth::user()->username }}</span>
                </li>
                <li class="p-2 text-xs lg:text-lg text-gray-50">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="border-opacity-0 font-bold">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li class="p-2 text-xs lg:text-lg font-bold text-gray-50">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="p-2 text-xs lg:text-lg font-bold text-gray-50">
                    <a href="{{ route('register') }}">Sign Up</a>
                </li>
                @endguest
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>