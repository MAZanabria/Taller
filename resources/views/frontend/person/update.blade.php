<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Uptade the person {{$person->nombre}}:</h1>
    <form action="/person/{{$person->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="ci">
            CI:
            <input type="text" name="ci" value="{{$person->ci}}">
        <label for="nombre">
            Name:
            <input type="text" name="nombre" value="{{$person->nombre}}">
        </label>
        <label for="paterno">
            First Name:
            <input type="text" name="paterno" value="{{$person->paterno}}">
        </label>
        <label for="materno">
            Last Name:
            <input type="text" name="materno" value="{{$person->materno}}">
        </label>

        <button  type="submit">Submit</button>
    </form>

</body>
</html>