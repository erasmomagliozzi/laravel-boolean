<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;

  public function __construct()
  {
    $this->students = [
      [
        'img' =>'https://www.boolean.careers/images/students/biagini.png',
        'genders' => 'm',
        'name' => 'Alessandro Biagini',
        'age' => 25,
        'agency' =>'DISC SPA',
        'role' =>'web developer',
        'description' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
      ],
      [
        'img' =>'https://www.boolean.careers/images/students/poggini.png',
        'genders' => 'f',
        'name' => 'Paola Poggini',
        'age' => 24,
        'agency' =>'Prima Assicurazioni',
        'role' =>'junior software engineer',
        'description' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il role di Junior Software Engineer.'
      ],
      [
        'img' =>'https://www.boolean.careers/images/students/masetti.png',
        'genders' => 'f',
        'name' => 'Loana Masetti',
        'age' => 36,
        'agency' =>'The Zen Agency',
        'role' =>'web developer',
        'description' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.'
      ]
    ],
  }
  public function all()
  {
    $students = $this->students;

    $studentsAge = [];
      foreach ($students as students) {
        $studentysAge[] = $student['age'];
       }

    return response()->json($studentsAge);
  }
}
