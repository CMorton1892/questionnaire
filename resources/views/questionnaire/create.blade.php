@extends('layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <div class="container">
  <section>
    <h1>New Questionnaire</h1>
  </section>
  <section>
    <hr>
    <form action="/questionnaire" method="post">
        {{ csrf_field() }}
        <!-- Stores title inputted by user -->
        <div class="form-group">
            <label for="title">Questionnaire Title</label>
            <input type="text" class="form-control" id="title"  name="title">
        </div>
        <!-- Checks for any errors -->
        <!-- Uses validation stored in controller -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
  </section>
</div>
</body>
</html>

@endsection
