<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index',['items'=>$items]);
    }

    public function find(Request $request)
    {
        return view('Person.find',['input'=>'']);
    }

    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $request->input + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('Person.find', $param);
    }
}
