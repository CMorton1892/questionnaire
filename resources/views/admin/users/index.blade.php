<!-- UNUSED -->
<!-- KEPT FOR EVIDENCE OF TESTING -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin - Index</title>
</head>
<body>
  <div class="container">
    <header class="row">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <h1>Users</h1>
  <section>
    @if (isset ($users))

    <table>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Permissions</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td><a href="/admin/users/{{ $user->id }}" name="{{ $user->name }}">{{ $user->name }}</a></td>
        <td> {{ $user->email }}</td>
        <td>
          <ul>
            @foreach($user->roles as $role)
            <li>{{ $role->label }}</li>
            @endforeach
          </ul>
        </td>
      </tr>
      @endforeach
    </table>
    @else
    <p>No users yet</p>
    @endif
  </section>
</body>
</html>
