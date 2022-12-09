<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>


<?php

if (isset($_POST['submit'])) {
  $loginpassword = $_POST["loginpassword"];
  $email = $_POST["email"];
  LogInUser($email, $loginpassword, $conn);
}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body>
<div class="mt-5 d-flex justify-content-center">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="loginpassword" id="exampleInputPassword1">
  </div>
  <div class="mb-3"><a href="registration.php">Create Account</a></div>
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>