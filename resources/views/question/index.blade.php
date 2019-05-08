@extends('layouts.app')

@section('content')
    <div class="container">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
          <!-- Searches for questions inputted by user -->
        @foreach($question as $question)
            <tr>
              <!-- Searches for questionnaire title inputted by user -->
              @foreach($questionnaire as $item)
              <th>{{ $item->title }}</th>
              @endforeach
                <!-- Buttons do not work -->
                <!-- Unable to get functions to work -->
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
                <tr><td>1</td><td>{{$question->question1}}</td></tr>
                <tr><td>2</td><td>{{$question->question2}}</td></tr>
                <tr><td>3</td><td>{{$question->question3}}</td></tr>
                <tr><td>4</td><td>{{$question->question4}}</td></tr>
                <tr><td>5</td><td>{{$question->question5}}</td></tr>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button><a href="/questionnaire">Back</a></button>
  </div>
@endsection
