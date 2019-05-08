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
    <h1>Enter your Details</h1>
  </section>
  <section>
    <hr>
    <form action="/respondent" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="title">Email Address</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="title">Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label for="title">Gender</label>
            <select class="form-control" name="gender">
              <option>Male</option>
              <option>Female</option>
              <option>Prefer Not To Say</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Country</label>
            <select class="form-control" name="country">
              <option>England</option>
              <option>Scotland</option>
              <option>Wales</option>
              <option>Northern Ireland</option>
            </select>
        </div>
        <hr>
        <h4>Please read the following carefully and if you agree to give consent, please select "Yes" to continue.</h4>
          <p>The information gathered from your participation will only be used for the right reasons and will not be handed over to any third-parties.
            Your data will only be visible for research reasons where we collate our findings by age groups and genders. Once the following researcher has
            been completed and finalised, your data and personal details will be removed from our databases.</p>
        <div class="form-group">
          <label for="description">I agree to give consent...</label><br/>
          <label class="radio-inline"><input type="radio" name="consent" value="1"> Yes</label>
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
        <button type="submit" class="btn btn-primary">Next</button>
        <button><a href="/questionnaire">Back</a></button>
    </form>
  </section>
</div>
</body>
</html>

@endsection
