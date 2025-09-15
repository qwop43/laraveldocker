<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Lab App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('lab.index') }}">LabApp</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('lab.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('lab.about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('lab.status') }}">Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('lab.echo') }}">Echo</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
