@extends('layouts.layout1')
@section('title', 'Create')

@section('content')
<body>
    <h1>Create a new Person:</h1>
    <form action="/person" method="POST" class="form-data">
        @csrf
        <label for="ci">
            CI:
            <input type="text" name="ci">
        <label for="nombre">
            Name:
            <input type="text" name="nombre">
        </label>
        <label for="paterno">
            First Name:
            <input type="text" name="paterno">
        </label>
        <label for="materno">
            Last Name:
            <input type="text" name="materno">
        </label>

        <button  type="submit">Submit</button>
    </form>

</body>
@endsection