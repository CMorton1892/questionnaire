@extends('layouts.app')

@section('content')
    <div class="container">

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <!-- Responses from user displayed in table -->
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Question 1</th>
            <th scope="col">Question 2</th>
            <th scope="col">Question 3</th>
            <th scope="col">Question 4</th>
            <th scope="col">Question 5</th>
        </tr>
        </thead>
        <tbody>
        @foreach($response as $response)
            <tr>
                <th scope="row">{{$response->id}}</th>
                <td>{{$response->response1}}</td>
                <td>{{$response->response2}}</td>
                <td>{{$response->response3}}</td>
                <td>{{$response->response4}}</td>
                <td>{{$response->response5}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
@endsection
