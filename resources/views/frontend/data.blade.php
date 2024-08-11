@extends('layouts.layout1')
@section('title', 'data of persons')

@section('content')
<body>
    {{-- recibimos la data de tres maneras pero solo usaremos una --}}
    <h1>Hello in my get data!!</h1>
    {{-- recibiendo los datos del array --}}
    <h2>{{$data1}} {{$data2}}</h2> 

    {{-- recibiendo los datos del array --}}
    <h2><?=$data1?> <?=$data2?></h2> 

    {{-- recibiendo los datos del array --}}
    <h2>{!!$data1!!} {!!$data2!!}</h2> 
</body>
@endsection
