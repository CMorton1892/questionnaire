<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>New Questionnaire</title>
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="owners/create">Register</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <section>
    <h1>New Questionnaire</h1>

    {!! Form::open(['url' => 'questionnaire']) !!}

    <div class="form-group">
      {!! Form::label('title', 'Questionnaire Title:') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::close() !!}
  </section>
  <section>
    <button><a href="/questions/create">Add Question</a></button>
    <button><a href="">Upload Questionnaire</a></button>
  </section>
</body>
</html>
