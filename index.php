<?php

session_start();

if(isset($_SESSION['status'])) {
  if($_SESSION['role'] == 'admin') {
    header("Location:./admin.php");
  } else {
    header("Location:./user.php");
  }
}

if(isset($_POST['username'])) {
  if($_POST['username'] == 'day' && $_POST['password'] == 'day') {
    $_SESSION['username'] = "day";
    $_SESSION['role'] = 'admin';
    $_SESSION['status'] = "login";
    header("Location:./admin.php");
  } else if($_POST['username'] == 'user' && $_POST['password'] == 'user') {
    $_SESSION['username'] = "user";
    $_SESSION['role'] = 'user';
    $_SESSION['status'] = "login";
    header("Location:./user.php");
  } else {
    header("Location:./index.php?denied=true");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FORUM KATING</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card" style="min-width: 25rem;">
      <div class="card-header">
        <h4>Login</h4>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>