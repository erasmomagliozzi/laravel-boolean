
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
    <title></title>
  </head>

  <div class="container">
    <div class="navbar">
      <img class="logo" src="https://www.boolean.careers/images/common/logo.png" alt="">
      <div class="right_side">
        <a class="{{(Request::route()->getName() == 'view_controller.home') ? 'active' : ''}}" href="{{route('view_controller.home')}}">HOME</a>
        <a class="{{(Request::route()->getName() == 'view_controller.corso') ? 'active' : ''}}" href="{{route('view_controller.corso')}}">CORSO</a>
        <a class="{{(Request::route()->getName() == 'students.index') ? 'active' : ''}}" href="{{route('students.index')}}">DOPO IL CORSO</a>
        <a class="{{(Request::route()->getName() == 'view_controller.home') ? 'active' : ''}}" href="">LEZIONE GRATUITA</a>
        <button type="button" name="button">CANDIDATI ORA</button>

      </div>

    </div>
