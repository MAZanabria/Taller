@extends('layouts.layout1')
@section('title', 'Grett')

@section('content')
<body>
    <h1>Data of persons</h1>
<table border="3" class="">
    <thead>
        <tr>
            <th>ID</th>
            <th>CI</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($persons as $person)
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->ci }}</td>
                <td>{{ $person->paterno }}</td>
                <td>{{ $person->materno }}</td>
                <td>{{ $person->nombre }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
@endsection
