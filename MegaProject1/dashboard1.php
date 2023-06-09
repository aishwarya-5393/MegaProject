<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="css/dashboard1.css" />
    <link rel="icon" href="images/CARSERV favicon.png" />
  </head>
  <body>
    <h3 class="logo">CarServ</h3>
    <span class="fa-duotone fa-magnifying-glass"></span>

    <!-- sidebar -->
    <div class="sidebar">

      <div class="sidebar-menu">
        <span class="fas fa-home"></span>
        <a href="dashboard1.php">Home</a>
      </div>

      
      <div class="sidebar-menu">
        <span class="fas fa-user"></span>
        <a href="register.php">SignUp</a>
      </div>
      <div class="sidebar-menu">
        <span class="fas fa-user"></span>
        <a href="login.php">SignIn</a>
      </div>
    </div>

    <!-- main dashboard -->
    <div class="dashboard">
      <div class="dashboard-banner">
        <img src="images/banner.png" alt="" />
        <div class="banner-promo">
          <h1>
            <span>Here are some best</span><br />
            Car Service Centers <br />in Kolhapur City
          </h1>
        </div>
      </div>

      <div class="dashboard-content">
        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/sai.jpg" />
          </a>
          <div class="card-detail">
            <h4>Sai Car Service Center</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/autocare.png" />
          </a>
          <div class="card-detail">
            <h4>AutoCare Solutions</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/drive.jpeg" />
          </a>
          <div class="card-detail">
            <h4>Drive Right Service Center</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/speed tech.png" />
          </a>
          <div class="card-detail">
            <h4>SpeedTech Auto Shop</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/car doc.jpeg" />
          </a>
          <div class="card-detail">
            <h4>The Car Doctor</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/carfix.png" />
          </a>
          <div class="card-detail">
            <h4>CarFix Solutions</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/carmedics.jpeg" />
          </a>
          <div class="card-detail">
            <h4>The Car Medics</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐</p>
          </div>
        </div>

        <div class="dashboard-card">
          <a href="login.php">
            <img class="card-image" src="images/motor works.jpeg" />
          </a>
          <div class="card-detail">
            <h4>MotorWorks Service Hub</h4>
            <p>Lorem ipsum dolor sit .</p>
            <p>Ratings:⭐⭐⭐⭐⭐</p>
          </div>
        </div>

       
        </div>
      </div>
    </div>
  </body>
</html>
