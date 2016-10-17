<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    public function profile ()
    {
    	return view ('static/profile');

    }

 public function contact ()
    {
    	return view ('static/contact');

    }

    public function index ()
   
    {
    	return view ('static/index');

    }


public function Child ()
   
    {
        return view ('static/child');

    }

    public function app ()
   
    {
        return view ('static/app');

    }
     public function Mhs ()
    {
        return view ('static/Mhs');

    }
}
