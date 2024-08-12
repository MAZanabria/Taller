@extends('layouts.layout1')
@section('title', 'Person')

@section('content')
<div>

    <form action="" class="form-data">
        <label for="ci">
            <input type="text" value="{{$person->ci}}" readonly>
        </label>
        <label for="nombre">
            <input type="text" value="{{$person->nombre}}" readonly>
        </label>
        <label for="paterno">
            <input type="text" value="{{$person->paterno}}" readonly>
        </label>
        <label for="materno">
            <input type="text" value="{{$person->materno}}" readonly>
        </label>
    </form>
</div>
@endsection
