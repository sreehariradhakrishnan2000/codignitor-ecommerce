<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ecommerce";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="login-container">
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br>
      <input type="submit" value="Login">
    </form>
  </div>
  <script src="login.js"></script>
</body>
</html>
