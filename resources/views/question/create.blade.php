<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add Question</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <article>
      <h1>Add Question</h1>

      {!! Form::open(['url' => 'questions']) !!}

      <div class="form-group">
        {!! Form::label('questionnaireID', 'Question Number:') !!}
        {!! Form::text('questionnaireID', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('question', 'Question:') !!}
        {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Add Question', ['class' => 'btn btn-primary form-control']) !!}
      </div>

      {!! Form::close() !!}

    </article>
  </div>
</body>
</html>
