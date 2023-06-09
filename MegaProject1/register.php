<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>

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

    <link rel="stylesheet" href="css/register.css" />
    <link rel="icon" href="images/favicon.ico" />
  </head>
  <body>
    <section id="register">
      <h1>CarServ</h1>
      <div>
        <h2>Register Yourself</h2>
        <form method="POST">
          <input
            type="text"
            class="input"
            name="fname"
            placeholder=" First Name" required
          /><br /><br />
          <input
            type="text"
            class="input"
            name="lname"
            placeholder=" Last Name"required
          /><br /><br />
          <input
            type="email"
            class="input"
            name="email"
            placeholder=" Email Address"
            required
          /><br /><br />
          <input
            type="text"
            class="input"
            name="mobile"
            placeholder=" Mobile No"
            required
          /><br /><br />
          <input type="text" class="input" placeholder=" Address" name="address" required/><br /><br />
          <input
            type="text"
            class="input"
            name="cname"
            placeholder=" Car Name"
            required
          /><br /><br />
          <input
            type="password"
            class="input"
            name="password"
            placeholder=" Password"
            required
          /><br /><br />

          <a href="login.php">
            <button type="submit" class="btn btn-dark btn-lg download-button" name="submit">
              Register
            </button> </a
          ><br /><br /><br />
          <?php

      include_once("dbconnect.php");
      if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // Retrieve form inputs
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone=$_POST['mobile'];
        $address=$_POST['address'];
        $cname=$_POST['cname'];
        $password=$_POST['password'];
        
        $sql = "INSERT INTO register (fname,lname,email,mobile,address,cname,PASSWORD) values ('$fname','$lname','$email','$phone','$address','$cname','$password')";
if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    echo "Registration successful";
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      }
      
      ?>

          <p>Already Registered <a href="login.php">Login</a></p>
        </form>
      </div>
    </section>
  </body>
</html>
