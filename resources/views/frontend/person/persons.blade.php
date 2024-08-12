@extends('layouts.layout1')
@section('title', 'Listo of persons')

@section('content')

    <body>
        <div class="content">
            <div class="title">
                <h1>Data of persons</h1>
                <a href="/person/create"><button>New person</button></a>
            </div>

            <table border="3" class="">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CI</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Nombre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persons as $person)
                        <tr>
                            <td>{{ $person->id }}</td>
                            <td>{{ $person->ci }}</td>
                            <td>{{ $person->paterno }}</td>
                            <td>{{ $person->materno }}</td>
                            <td>{{ $person->nombre }}</td>
                            <td>
                                <div class="buttons">

                                    <a href="persons/{{ $person->id }}"><button>View</button></a>
                                    <a href="persons/{{ $person->id }}/edit"><button>Edit</button></a>
                                    <form action="/persons/{{ $person->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit">
                                            delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>
@endsection
