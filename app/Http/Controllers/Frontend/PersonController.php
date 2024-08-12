<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function add(Request $request)
    {
        $request->validate(
            [
                'ci' => 'required | string',
                'nombre' => 'required | string',
                'materno' => 'required | string',
                'paterno' => 'required | string',
            ]
        );
        Person::create($request->all());        
        return redirect('/persons');
    }
    public function getAll()
    {
        // $persons = Person::all();
        $persons = Person::orderBy('id', 'asc')->get();
        return view('frontend.person.persons', ['persons' => $persons]);
    }
    public function getById($id_person)
    {
        // $persons = Person::all();
        $person = Person::findOrFail($id_person);
        return view('frontend.person.person', ['person' => $person]);
    }
    public function updateById(Request $request, $id_person){
        $person = Person::find($id_person);

        //para validar los datos
        $request->validate(
            [
                'ci' => 'required | string',
                'nombre' => 'required | string',
                'materno' => 'required | string',
                'paterno' => 'required | string',
            ]
        );

        $person->update($request->all());
        return redirect('/persons');
    }
    public function deleteById($id_person){
        $person = Person::findOrFail($id_person);
        $person->delete();

        return redirect('/persons');
    }
}
