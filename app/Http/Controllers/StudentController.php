<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;
  public function __construct(){

    $this->students = config('students.students');

    return view('static.index');
  }

  public function index()
    {
    $students = $this->students;
    $data = [
        'students' => $this ->students,
        'genders' => ['m','f'],
        'title' => 'Carriere'
    ];
      return view('students.index', $data);
    }


}
