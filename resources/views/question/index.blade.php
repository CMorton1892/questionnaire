@extends('layouts.app')

@section('content')
    <div class="container">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    @foreach($question as $questionnaire)
        <h4>{{ $questionnaire->title }}</h4>
    @endforeach
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
        </tr>
        </thead>
        <tbody>
        @foreach($question as $question)
            <tr>
                <tr><td>1</td><td>{{$question->question1}}</td></tr>
                <tr><td>2</td><td>{{$question->question2}}</td></tr>
                <tr><td>3</td><td>{{$question->question3}}</td></tr>
                <tr><td>4</td><td>{{$question->question4}}</td></tr>
                <tr><td>5</td><td>{{$question->question5}}</td></tr>
                <tr><td>6</td><td>{{$question->question6}}</td></tr>
                <tr><td>7</td><td>{{$question->question7}}</td></tr>
                <tr><td>8</td><td>{{$question->question8}}</td></tr>
                <tr><td>9</td><td>{{$question->question9}}</td></tr>
                <tr><td>10</td><td>{{$question->question10}}</td></tr>
                <td><a href="/question/create">Add<a/></td>
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button><a href="/questionnaire">Back</a></button>
  </div>
@endsection
