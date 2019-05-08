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
      <h1>Answer the Following Questions</h1>
      <h4>Please answer each question.</h4>
      <hr>
      <form action="/response" method="post">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="title">Question 1</label>
              <label class="radio-inline"><input type="radio" name="response1" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response1" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 2</label>
              <label class="radio-inline"><input type="radio" name="response2" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response2" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 3</label>
              <label class="radio-inline"><input type="radio" name="response3" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response3" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 4</label>
              <label class="radio-inline"><input type="radio" name="response4" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response4" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 5</label>
              <label class="radio-inline"><input type="radio" name="response5" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response5" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="5">   Strongly Disagree</label>
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
          <button type="submit" class="btn btn-primary">Submit Answers</button>
        </form>
    </article>
  </div>
</body>
</html>
@endsection
