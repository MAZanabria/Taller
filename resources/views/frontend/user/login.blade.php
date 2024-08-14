@extends('layouts.layout1')
@section('title', 'Create')

@section('content')

<body>
    <h1>Login as a person:</h1>
    <form action="/authenticate" method="POST" class="form-data">
        @csrf
        <label for="name">
            Name:
            <input type="text" name="name">
        </label>
        <label for="password">
            Password:
            <input type="password" name="password">
        </label>
        <label for="id_person">
            Id de la persona con la que desea ingresar:
            <input type="text" name="id_person">
        </label>
        <button  type="submit">Submit</button>
    </form>

</body>
@endsection