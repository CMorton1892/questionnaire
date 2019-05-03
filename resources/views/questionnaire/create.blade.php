@extends('layouts.app')

@section('content')

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <section>
    <h1>Questionnaires</h1>
  </section>
  <section>
    <hr>
    <form action="/questionnaire" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Question 1</label>
            <input type="text" class="form-control" id="productName"  name="name">
        </div>
        <div class="form-group">
            <label for="description">Question 2</label>
            <select class="form-control" name="company">
                <option>Apple</option>
                <option>Google</option>
                <option>Mi</option>
                <option>Samsung</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Question 3</label>
            <input type="text" class="form-control" id="productAmount" name="amount"/>
        </div>
        <div class="form-group">
            <label for="description">Question 4</label><br/>
            <label class="radio-inline"><input type="radio" name="available" value="1"> Yes</label>
            <label class="radio-inline"><input type="radio" name="available" value="0"> No</label>
        </div>
        <div class="form-group">
            <label for="description">Question 5</label>
            <textarea type="text" class="form-control" id="productDescription" name="description"></textarea>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>
</body>
</html>

@endsection
