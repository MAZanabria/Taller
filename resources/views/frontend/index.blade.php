@extends('layouts.layout1')
@section('title', 'Index')

@section('content')
<body>
    <div class="content">
        <h1>Hello, from my View using laravel</h1>
        <a href="/persons">
            <button>Go to list of persons</button>
        </a>
    </div>
</body>
@endsection
