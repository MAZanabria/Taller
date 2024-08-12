@extends('layouts.layout1')
@section('title', 'Update data')

@section('content')
    <h1>Uptade the person {{ $person->nombre }}:</h1>
    <form action="/person/{{ $person->id }}" method="POST" class="form-data">
        @csrf
        @method('PUT')
        <label for="ci">
            CI:
            <input type="text" name="ci" value="{{ $person->ci }}">
            <label for="nombre">
                Name:
                <input type="text" name="nombre" value="{{ $person->nombre }}">
            </label>
            <label for="paterno">
                First Name:
                <input type="text" name="paterno" value="{{ $person->paterno }}">
            </label>
            <label for="materno">
                Last Name:
                <input type="text" name="materno" value="{{ $person->materno }}">
            </label>

            <button type="submit">Submit</button>
    </form>
@endsection
