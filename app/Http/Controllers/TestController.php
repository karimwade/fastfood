<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return \view('test.mytest');
    }

    public function food()
    {
        if(!Gate::allows('access-admin')){
            \abort('403');
        }
        else {
            return \view('food');
        }
            
    }
}
