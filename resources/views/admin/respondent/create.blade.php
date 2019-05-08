<!-- UNUSED -->
<!-- KEPT FOR EVIDENCE OF TESTING -->

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Questionnaire</title>
  <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <article class="row">
      <h1>Questionnaire</h1>
      <p>Please fill in the form below with your details.</p>

      {!! Form::open(['url' => 'questionnaire']) !!}

      <div class="form-group">
        {!! Form::label('respondentFirstName', 'First Name:') !!}
        {!! Form::text('respondentFirstName', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('respondentLastName', 'Last Name:') !!}
        {!! Form::text('respondentLastName', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('age', 'Age:') !!}
        {!! Form::selectRange('age', 16, 90, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        {!! Form::select('country', array('ENG' => 'England', 'SCO' => 'Scotland', 'WAL' => 'Wales', 'NI' => 'Northern Ireland'), ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('consent', 'Consent:') !!}
        {!! Form::checkbox('consent', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Next', ['class' => 'btn btn-primary form-control']) !!}
      </div>

      {!! Form::close() !!}

    </article>
    <footer class="row">
    </footer>
  </div>
</body>
</html>
