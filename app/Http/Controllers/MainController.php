<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
    	return view('welcome');
    }

    public function a(){
    	return 'a page';
    }

    public function test(){
    	return view('test');
    }

}

