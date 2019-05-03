@extends('layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <section>
    <h1>Questionnaires</h1>
    <hr>
    <button><a href="questionnaire/create">New</a></button>
    <button><a href="respondents/create">New Questionnaire</a></button>
    <button><a href="/questions">List of Questions</a></button>
    <section>
      @if (isset ($questionnaire))
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <td>Questionnaire Title</td>
            <td>Update</td>
            <td>Delete</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($questionnaire as $questionnaire)
          <tr>
            <td>{{ $questionnaire->id }}</td>
            <td><a href="">Update</a></td>
            <td><a href="">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <p>No questionnaires added yet.</p>
      @endif
    </section>
  </section>
</body>
</html>

@endsection
