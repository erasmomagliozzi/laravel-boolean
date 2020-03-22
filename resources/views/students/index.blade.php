@extends('layouts.layout')

@section('main')
  @foreach($students as $key => $student)
  <p>
   {{$key}}: <br>
   Nome: {{$student['name']}} <br>
   Età: {{$student['age']}} <br>
   Azienda: {{$student['agency']}} <br>
   Ruolo :{{$student['role']}} <br>
   Descrizione :{{$student['description']}}<br>
   {{$student['img']}}<br>

  </p>
  @endforeach
@endsection
