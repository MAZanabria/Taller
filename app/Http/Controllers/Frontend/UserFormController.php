<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function login(){
        return view('frontend.user.login');
    }
}
