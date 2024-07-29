<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FORKALAM | LOGIN</title>
    <link rel="stylesheet" href="css/login.css" />
    <link href="gambar/logo.png" rel="shorcut icon">
  </head>
  <body>
    <div class="login-card">
      <h2>Login</h2>
      <h3>Silakan Login</h3>
      <form class="login-form" action="/login" method="post">
        @csrf
        <input type="text" placeholder="user" id="user" name="user" class="form-control">
        <input type="password" placeholder="password" id="pass" name="pass" >
        <button type="submit" name="submit">LOGIN</button>
      </form>
    </div>
  </body>
</html>