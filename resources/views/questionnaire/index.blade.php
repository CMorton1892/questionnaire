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
            <th scope="col">Questionnaire</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($questionnaire as $questionnaire)
            <tr>
                <th scope="row">{{$questionnaire->id}}</th>
                <td><a href="/response/create">{{$questionnaire->title}}</a></td>
                <td><a href="/question/create">Add<a/></td>
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@endsection
