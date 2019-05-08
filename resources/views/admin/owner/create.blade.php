<!-- UNUSED -->
<!-- KEPT FOR EVIDENCE OF TESTING -->

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Create Owner</title>
  <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <ul class="nav navbar-nav">
            <a class="navbar-brand" href="#">Admin</a>
            <li class="active"><a href="/">Home</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <article class="row">
      <h1>Create Account</h1>
      <p>Please fill in the form below with your details.</p>

      {!! Form::open(['url' => 'owners']) !!}

      <div class="form-group">
        {!! Form::label('ownerFirstName', 'First Name:') !!}
        {!! Form::text('ownerFirstName', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('ownerLastName', 'Last Name:') !!}
        {!! Form::text('ownerLastName', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('ownerEmail', 'Email Address:') !!}
        {!! Form::text('ownerEmail', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('ownerUsername', 'Username:') !!}
        {!! Form::text('ownerUsername', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('ownerPassword', 'Password:') !!}
        {!! Form::password('ownerPassword', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Create Account', ['class' => 'btn btn-primary form-control']) !!}
      </div>

      {!! Form::close() !!}

    </article>
    <footer class="row">
    </footer>
  </div>
</body>
</html>
