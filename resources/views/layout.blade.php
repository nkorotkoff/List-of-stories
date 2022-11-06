<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Истории</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet"/>
</head>
<body>
<div class="container ">

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('index')}}">History</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('add_history')}}">Add new history</a>
                    </li>
                </ul>
            </div>
        </div>
        @guest()
        <a href="{{route('login')}}" class="link-primary remove">Login</a>
        <a href="{{route('register')}}" class="link-primary remove">Register</a>
        @endguest
        @auth()
            @if(\App\Models\User::isAdmin())
            <a href="{{route('adminpanel')}}" class="link-primary remove">Admin Panel</a>
            @endif
            <a href="{{route('logout')}}" class="link-primary remove">logout</a>
        @endauth
{{--            {{\Illuminate\Support\Facades\Auth::user()}}--}}
    </nav>
    @yield('content')
</div>
<script src="/js/js.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
></script>
</body>
</html>
