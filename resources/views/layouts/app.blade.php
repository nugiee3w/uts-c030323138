<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Museum App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to My Museum</h1>
        <nav>
            <ul>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('exhibitions.index') }}">Exhibitions</a></li>
                <li><a href="{{ route('collectors.index') }}">Collectors</a></li>
                <li><a href="{{ route('storage_locations.index') }}">Storage Locations</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Museum. All rights reserved.</p>
    </footer>
</body>
</html>
