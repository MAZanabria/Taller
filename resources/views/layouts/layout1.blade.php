<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
    <div class="header">
        <h1>Welcome to my Little CRUD</h1>
    </div>
    @yield('content')

</body>

</html>
