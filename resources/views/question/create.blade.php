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
      <hr>
      <form action="/questionnaire" method="post">
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
          <div class="form-group">
              <label for="title">Question 6</label>
              <input type="text" class="form-control" id="productName"  name="question6">
          </div>
          <div class="form-group">
              <label for="title">Question 7</label>
              <input type="text" class="form-control" id="productName"  name="question7">
          </div>
          <div class="form-group">
              <label for="title">Question 8</label>
              <input type="text" class="form-control" id="productName"  name="question8">
          </div>
          <div class="form-group">
              <label for="title">Question 9</label>
              <input type="text" class="form-control" id="productName"  name="question9">
          </div>
          <div class="form-group">
              <label for="title">Question 10</label>
              <input type="text" class="form-control" id="productName"  name="question10">
          </div>
    </article>
  </div>
</body>
</html>
@endsection
