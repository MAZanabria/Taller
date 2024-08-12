<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonFormController extends Controller
{
    public function create(){
        return view('frontend.person.create');
    }
    public function edit($id_person){
        $person = Person::find($id_person);
        return view('frontend.person.update',['person' => $person]);
    }
}
