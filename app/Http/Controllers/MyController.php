<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home($value='')
    {
    	return view('home');	
    }

    public function movie($value='')
    {
        return view('movie');    
    }

    public function about($value='')
    {
    	return view('about');
    }

    public function contact($value='')
    {
    	return view('contact');
    }

    public function tvshow($value='')
    {
        return view('tvshow');
    }

    public function service($value='')
    {
        // string
        // return view('service',['name'=>'Soe']);

        // array of array
        $students = array(
            array('name'=>'mg mg','age'=>20),
            array('name'=>'su su','age'=>22)
        );
        // dd($students);//var_dump();die();

        // may be array of objects
        return view('service',['a'=>$students]);

    }
}
