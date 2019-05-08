@extends('layouts.app')

@section('content')
  <div class="container">
    <h5>Please click here to view the questions belonging to each questionnaire.</h5>
    <button><a href="question">View Questionnaire Questions</a></button>
    <hr>
    <h5>Please click here to view the responses of each questionnaire.</h5>
    <button><a href="respondent">View Questionnaire Responses</a></button>
  </div>
@endsection
