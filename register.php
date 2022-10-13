<?php
include 'config/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['email'])) {
  header("Location: index.php");

  (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
      $sql = "SELECT * FROM register WHERE email='$email'";
      $result = mysqli_query($conn, $sql);
      if (!$result->num_rows > 0) {
          $sql = "INSERT INTO register (firstname, lastname, email, password)
                  VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              echo "<script>alert('Selamat, registrasi berhasil!')</script>";
              $firstname = "";
              $lastname = "";
              $email = "";
              $_POST['password'] = "";
              $_POST['cpassword'] = "";
          } else {
              echo "<script>alert('Terjadi kesalahan.')</script>";
          }
      } else {
          echo "<script>alert('Email Sudah Terdaftar.')</script>";
      }
    } else {
      echo "<script>alert('Password Tidak Sesuai')</script>";
  }
}
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Manage Inventory | Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body class="bg-gradient-secondary d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
            <img src="img/inventory.svg" alt="" style="width: 600px; height: 500px" class="col-lg-5 d-none d-lg-block p-5" />
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                </div>
                <form action="" method="POST" class="user">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address"  name="email" value="<?php echo $email; ?>" required>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>
                  </div>
                  <button class="btn btn-secondary btn-user btn-block"> Register Account </button>
                  <hr />
                </form>
                <hr />
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="login.html">Already have an account? Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
