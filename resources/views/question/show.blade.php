<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Questions</title>
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
    <article class="row">
      <h1>Questions</h1>
      <section>
        @if (isset ($questions))

        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <td>Question</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($questions as $questions)
            <tr>
              <td>{{ $questions->question }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <p>No questions added yet.</p>
        @endif
      </section>
      <section>
        <button><a href="/questions/create">Add Question</a></button>
    </article>
    <footer class="row">
    </footer>
  </div>
</body>
</html>
