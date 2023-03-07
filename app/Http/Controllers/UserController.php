<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function login(Request $request){
        //return view('user/index');
        return view('administrator/index');
    }
}
