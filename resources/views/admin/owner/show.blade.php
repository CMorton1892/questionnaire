<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin - Owners</title>
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
      <h1>Owner</h1>
      <section>
        @if (isset ($owners))
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Email Address</td>
              <td>Username</td>
              <td>Update</td>
              <td>Delete</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($owners as $owners)
            <tr>
              <td>{{ $owners->ownerFirstName }}</td>
              <td>{{ $owners->ownerLastName }}</td>
              <td>{{ $owners->ownerEmail }}</td>
              <td>{{ $owners->ownerUsername }}</td>
              <td><a href="">Update</a></td>
              <td><a href="">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
        <p>No owners added yet.</p>
        @endif
      </section>
    </article>
    <footer class="row">
    </footer>
  </div>
</body>
</html>
