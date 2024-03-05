    <?php 

   
   // start the session
   session_start();
   

   
   // check if the logout button was clicked
   if(isset($_POST["logout"])) {
      // destroy the session
      session_unset();
      session_destroy();
      
      // redirect the user to the login page
      header("Location: loginpage.php");
      exit();
   }





    include "config.php";

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <?php





// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



if(isset($_POST['submit'])) {


// Get email and password from user input
$email = $_POST['email'];
$password = $_POST['password'];



// if (isset($_POST['email']) && isset($_POST['password']))



$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);

// Check if match is found
if (mysqli_num_rows($result) == 1) {
  $_SESSION['email']=$email;
     echo "Login successful.";
    header("Location: index.php");
} else {
    // Login failed, display error message
    echo "Invalid email or password.";
}}

// Close database connection
mysqli_close($con);

?>

</head>

<body>
    

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5"><b>Sign In</b></h5>


            <form action="" method="POST" >
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>


              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="submit">Sign in</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>