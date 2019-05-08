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
      <h4>How strongly do you agree with the following statements?</h4>
      <hr>
      <form action="/response" method="post">
          {{ csrf_field() }}
          <div class="form-group">
              <!-- Should pull question from questions model -->
              <!-- Likert scale used to generate responses -->
              <label for="title">It is important to focus on the target audience when creating questions for a questionnaire.</label><br/>
              <label class="radio-inline"><input type="radio" name="response1" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response1" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response1" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <!-- Should pull question from questions model -->
              <!-- Likert scale used to generate responses -->
              <label for="title">Respondents are more likely to provide answers which presents them in a good light if they feel that their true answer would be deemed as controversial or unpopular.</label><br/>
              <label class="radio-inline"><input type="radio" name="response2" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response2" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response2" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <!-- Should pull question from questions model -->
              <!-- Likert scale used to generate responses -->
              <label for="title">Respondents become disinterested or confused when the questions which form a questionnaire are not in a particular order or do not flow smoothly from one another.</label><br/>
              <label class="radio-inline"><input type="radio" name="response3" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response3" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response3" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <!-- Should pull question from questions model -->
              <!-- Likert scale used to generate responses -->
              <label for="title">It is important for the respondents to know the purpose behind the questionnaire and why they are completing it.</label><br/>
              <label class="radio-inline"><input type="radio" name="response4" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response4" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response4" value="5">   Strongly Disagree</label>
          </div>
          <div class="form-group">
              <!-- Should pull question from questions model -->
              <!-- Likert scale used to generate responses -->
              <label for="title">Respondents are less likely to complete a questionnaire to their true ability or thoughts if they have little interest in the subject of the questions.</label><br/>
              <label class="radio-inline"><input type="radio" name="response5" value="1">   Strongly Agree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="2">   Agree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="3">   Neither</label>
              <label class="radio-inline"><input type="radio" name="response5" value="4">   Disagree</label>
              <label class="radio-inline"><input type="radio" name="response5" value="5">   Strongly Disagree</label>
          </div>
          <!-- Checks for any errors -->
          <!-- Uses validation stored in controller -->
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
