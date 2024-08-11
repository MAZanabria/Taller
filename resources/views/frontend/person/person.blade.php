<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/persons">Return to the list</a>
    <h1>Name: {{$person->nombre}}</h1>
    <h1>Apellido paterno: {{$person->paterno}}</h1>
    <h1>Apellido materno: {{$person->materno}}</h1>
</body>
</html>
