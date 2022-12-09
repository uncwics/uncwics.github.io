<?php include 'header.php' ?>
<?php include 'functions.php' ?>

<?php

$firstname = $lastname = $password = $email = '';


// ADD to Database
if (isset($_POST['submit'])) {
  $firstname = $_POST["newFirstName"];
  $lastname = $_POST["newLastName"];
  $password = $_POST["newpassword"];
  $email = $_POST["newemail"];

  if (!empty(emailExists($email, $conn))){
    echo "Email Exist";
    exit();
  }
  CreateUser($firstname, $lastname, $email, $password, $conn);
}
  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex align-items-center justify-content-center mt-5"><h3>Register</h3></div>
    <div class="d-flex align-items-center justify-content-center mt-2">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="" class="form-control" id="newFirstName" name="newFirstName">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Last Name</label>
    <input type="" class="form-control" id="newLastName"  name="newLastName">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="newemail" name="newemail" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="newpassword" name="newpassword">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
  
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>