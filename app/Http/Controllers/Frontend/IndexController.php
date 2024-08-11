<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function create()
    {
        // print_r($persons);
        return view('frontend.person.create');
        
    }
    //tambien se puede imprimir directamente usando el echo
    public function getData()
    {
        $data = ['data1' => 'perez', 'data2' => 'cayo'];

        return view('frontend.data', $data);
    }
    public function getPersons(){
        $persons = Person::all();
        return view('frontend.person.persons', ['persons' => $persons]);
    }
    public function getPerson($id_person){
        $person = Person::find($id_person);

        return view('frontend.person.person', ['person' => $person]);
    }
    public function addPerson(Request $request){
        $person = new Person();
        $person->ci = $request->ci;
        $person->nombre = $request->nombre;
        $person->paterno = $request->paterno;
        $person->materno = $request->materno;

        $person->save();

        return redirect('/persons');
    }
}
