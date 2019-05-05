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
            <th scope="col">Question 1</th>
            <th scope="col">Question 2</th>
            <th scope="col">Question 3</th>
            <th scope="col">Question 4</th>
            <th scope="col">Question 5</th>
            <th scope="col">Question 6</th>
            <th scope="col">Question 7</th>
            <th scope="col">Question 8</th>
            <th scope="col">Question 9</th>
            <th scope="col">Question 10</th>
        </tr>
        </thead>
        <tbody>
        @foreach($respondent as $respondent)
            <tr>
                <th scope="row">{{$respondent->id}}</th>
                <td>{{$respondent->response1}}</td>
                <td>{{$respondent->response2}}</td>
                <td>{{$respondent->response3}}</td>
                <td>{{$respondent->response4}}</td>
                <td>{{$respondent->response5}}</td>
                <td>{{$respondent->response6}}</td>
                <td>{{$respondent->response7}}</td>
                <td>{{$respondent->response8}}</td>
                <td>{{$respondent->response9}}</td>
                <td>{{$respondent->response10}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@endsection