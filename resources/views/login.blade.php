<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
      body {
        background: linear-gradient(#B2FEFA, #0ED2F7);
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <h1>Login</h1>
      <form action="/login" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" name="password" id="pass" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </body>
</html>
