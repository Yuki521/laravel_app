<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'yamada','mail'=>'yuki@test.com'],
            ['name'=>'yamada2','mail'=>'yuki@test.com2'],
            ['name'=>'yamada3','mail'=>'yuki@test.com3'],
        ];
        return view('hello.index',['data'=>$data]);
    }

    public function post(Request $request)
    {
        return view('hello.index',['msg'=>$request->msg]);
    }
}
