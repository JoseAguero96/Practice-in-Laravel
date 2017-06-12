<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function contacto()
    {
    	return view('contacto');
    }

    public function acercade()
    {
    	return view('acercade');
    }

    public function admin(){
        return view('admin.index');
    }
}
