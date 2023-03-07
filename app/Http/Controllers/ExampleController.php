<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function homepage(){
        $name = 'Kostas';
        $animals = ["γάτα", "σκύλος", "προβατο"];
        return view('homepage', ['animals'=>$animals, 'name' => $name, 'surname' => 'Stefanopoulos']);
    }
    public function about(){
        return view('single-post');
    }
}
