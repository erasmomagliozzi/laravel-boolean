<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){

     return view('static.index');
    }
    public function corso(){

      return view('static.corso');
    }
    public function dopoCorso(){
      return view('static.dopoCorso');
    }
}
