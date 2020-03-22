<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $students;
    public function index(){

      $students = config('students.students');
      return view('static.index');
    }
    public function corso(){

      return view('static.corso');
    }
    public function dopoCorso(){
      return view('static.dopoCorso');
    }
}
