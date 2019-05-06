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
    <h1>Questionnaires</h1>
    <hr>
    <button><a href="questionnaire/create">Create New Questionnaire</a></button>
    <button><a href="questionnaire">View All Questionnaires</a></button>
    <button><a href="">Admin Area</a></button>
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
          @foreach ($questionnaires as $questionnaire)
          <tr>
            <td>{{ $questionnaire->title }}</td>
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
</div>
</body>
</html>

@endsection
