@extends('layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add Question</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <div class="container">
    <article>
      <h1>Add Questions</h1>
      <h4>Your questionnaire must have 5 questions only.</h4>
      <h5>The respondents will give their feedback via a Likert Scale.</h5>
      <hr>
      <form action="/question" method="post">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="title">Question 1</label>
              <input type="text" class="form-control" id="productName"  name="question1">
          </div>
          <div class="form-group">
              <label for="title">Question 2</label>
              <input type="text" class="form-control" id="productName"  name="question2">
          </div>
          <div class="form-group">
              <label for="title">Question 3</label>
              <input type="text" class="form-control" id="productName"  name="question3">
          </div>
          <div class="form-group">
              <label for="title">Question 4</label>
              <input type="text" class="form-control" id="productName"  name="question4">
          </div>
          <div class="form-group">
              <label for="title">Question 5</label>
              <input type="text" class="form-control" id="productName"  name="question5">
          </div>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <button type="submit" class="btn btn-primary">Add Questions</button>
        </form>
    </article>
  </div>
</body>
</html>
@endsection
