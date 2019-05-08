@extends('layouts.app')

@section('content')
    <div class="container">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <!-- Questionnaire titles displayed in table -->
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
                <td><a href="/respondent/create">{{$questionnaire->title}}</a></td>
                <!-- User can add questions to their questionnaire -->
                <td><a href="/question/create">Add<a/></td>
                <!-- Buttons do not work -->
                <!-- Unable to get functions to work -->
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@endsection
