<! DocType html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        @yield('Blogs')
        @yield('Blogs Item')
        @yield('New Blog')
        @yield('Edit Blog')
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <style>

    </style>
    <script></script>
</head>
<body class="bg-info">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Mostafa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/blogs">Blogs List <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/new-blog">Create Blog</a>
            </li>
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    Dropdown--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="#">Action</a>--}}
{{--                    <a class="dropdown-item" href="#">Another action</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    @yield('containt')

</body>
</html>
