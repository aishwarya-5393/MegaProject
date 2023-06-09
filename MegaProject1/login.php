<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat:wght@400;700;900&family=Sacramento&family=Ubuntu&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/login.css" />
    <link rel="icon" href="images/favicon.ico" />
  </head>
  <body>
    <section id="login">
      <h1>CarServ</h1>
      <div>
        <h2 class="heading">Login to your Account</h2>
        <form method="POST">
          <input
            type="email"
            placeholder=" Email Address"
            class="email"
            name="email"
          /><br /><br />

          <input
            type="password"
            placeholder=" Password"
            class="pass"
            name="password"
          /><br /><br />

          <a href="dashboard.php">
            <button type="submit" class="btn btn-dark btn-lg download-button" name="submit">
              Login
            </button> </a
          ><br /><br /><br />
          <?php

      include_once("dbconnect.php");
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        
       
        $email = $_POST['email'];
        $password=$_POST['password'];
        
        $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo "Login successful!";
          session_start();
          $_SESSION['email'] = $email;
          header("Location: dashboard.php");
          exit;
      } else {
          echo "Invalid email or password.";
      }
  }
      
      ?>
          <p>
            Don't have an account? <a href="register.php">Register here</a>
          </p>
        </form>
      </div>
    </section>
  </body>
</html>
