<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    .<div class="container">
      <div class="collapse navbar-collapse">
        <div class="navbar-nav">
          <a class="navbar-brand" href="/todos">TODOS</a>
          <a class="nav-item nav-link" href="/create">Add todo</a>
        </div>
      </div>
    </div>
  </nav>


  {{-- to run mysql server  --}}
  {{-- sudo /opt/lampp/manager-linux-x64.run --}}
  @yield('content')

</body>

</html>