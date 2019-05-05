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
      <h4>Your questionnaire can have up to 10 questions.</h4>
      <h5>The respondents will give their feedback via a Likert Scale.</h5>
      <hr>
      <form action="/respondent" method="post">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="title">Question 1</label>
              <label class="radio-inline"><input type="radio" name="response1" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response1" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 2</label>
              <label class="radio-inline"><input type="radio" name="response2" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response2" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 3</label>
              <label class="radio-inline"><input type="radio" name="response3" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response3" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 4</label>
              <label class="radio-inline"><input type="radio" name="response4" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response4" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 5</label>
              <label class="radio-inline"><input type="radio" name="response5" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response5" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 6</label>
              <label class="radio-inline"><input type="radio" name="response6" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response6" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response6" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response6" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response6" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 7</label>
              <label class="radio-inline"><input type="radio" name="response7" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response7" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response7" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response7" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response7" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 8</label>
              <label class="radio-inline"><input type="radio" name="response8" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response8" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response8" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response8" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response8" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 9</label>
              <label class="radio-inline"><input type="radio" name="response9" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response9" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response9" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response9" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response9" value="5">Strongly Disagree</label>
          </div>
          <div class="form-group">
              <label for="title">Question 10</label>
              <label class="radio-inline"><input type="radio" name="response10" value="1">Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response10" value="2">Agree</label>
              <label class="radio-inline"><input type="radio" name="response10" value="3">Neither</label>
              <label class="radio-inline"><input type="radio" name="response10" value="4">Disagree</label>
              <label class="radio-inline"><input type="radio" name="response10" value="5">Strongly Disagree</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit Answers</button>
        </form>
    </article>
  </div>
</body>
</html>
@endsection
