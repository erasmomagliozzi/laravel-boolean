@extends('layouts.layout')
@section('main')
  @foreach (config('students.students') as $student)
  <div class="student">
    <img src="{{$student['img']}}" alt="{{$student['nome']}}">
    <h1>{{$student['nome']}} ( {{$student['eta']}} anni)</h1>
    <h3>Assunt{{ ($student ['genere'] == 'm') ? 'o' : 'a'}} da {{$student ['azienda']}} come {{$student['ruolo']}}</h3>
    <p>{{$student ['descrizione']}}</p>

  </div>
  @endforeach
@endsection
