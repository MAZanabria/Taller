<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $person = Person::findOrFail($request->id_person);

        if ($person->nombre !=  $request->name) {
            return 'Error to find the person';
        } else {

            $persons = Person::orderBy('id', 'asc')->get();
            return view('frontend.person.persons', ['persons' => $persons]);
        }
    }
    public function add(Request $request)
    {
        $request->validate(
            [
                'name' => 'required | string',
                'password' => 'required | string',
                'id_person' => 'required | string',
            ]
        );
        User::create($request->all());
        return redirect('/persons');
    }
    public function getAll()
    {
        // $persons = Person::all();
        $persons = User::orderBy('id', 'asc')->get();
        return view('frontend.person.persons', ['persons' => $persons]);
    }
    public function getById($id_person)
    {
        // $persons = Person::all();
        $person = User::findOrFail($id_person);
        return view('frontend.person.person', ['person' => $person]);
    }
    public function updateById(Request $request, $id_person)
    {
        $person = User::find($id_person);

        //para validar los datos
        $request->validate(
            [
                'name' => 'required | string',
                'password' => 'required | string',
                'id_person' => 'required | string',
            ]
        );

        $person->update($request->all());
        return redirect('/persons');
    }
    public function deleteById($id_person)
    {
        $person = User::findOrFail($id_person);
        $person->delete();

        return redirect('/persons');
    }
}
