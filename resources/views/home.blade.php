@extends('layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <div class="container">
  <section>
    <h1>CIS2167 - Server and Client-Side Scripting Coursework 2</h1>
    <h2>Questionnaires</h2>
    <hr>
    <button><a href="questionnaire/create">Create New Questionnaire</a></button>
    <button><a href="questionnaire">View All Questionnaires</a></button>
    <button><a href="admin_area">Admin Area</a></button>
  </section>
</div>
</body>
</html>

@endsection
