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
            <th scope="col">Product Description</th>
            <th scope="col">Company</th>
            <th scope="col">Amount</th>
            <th scope="col">Available</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questionnaire as $questionnaire)
            <tr>
                <th scope="row">{{$questionnaire->id}}</th>
                <td>{{$questionnaire->title}}</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@endsection
