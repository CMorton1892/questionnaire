@extends('layouts.app')

@section('content')
    <div class="container">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        @foreach($questionnaire as $item)
        <tr><th>{{ $item->title }}</th></tr>
        @endforeach
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
