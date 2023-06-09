<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sai Car Service center</title>
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

    <link rel="stylesheet" href="css/sai_service.css" />
    <link rel="icon" href="images/CARSERV favicon.png" />
  </head>
  <body>
    <h3 class="logo">CarServ</h3>

    <!-- sidebar -->
    <div class="sidebar">
      <div class="sidebar-menu">
        <span class="fas fa-home"></span>
        <a href="dashboard.php">Home</a>
      </div>

      <div class="sidebar-menu">
        <span class="fas fa-calendar-check"></span>
        <a href="saics.php">Bookings </a>
      </div>

      <div class="sidebar-menu">
        <span class="fas fa-user"></span>
        <a href="securepage.php?logout=true">Logout</a>
      </div>
    </div>

    <div class="dashboard">
      <div class="dashboard-banner">
        <img src="images/serv5.jpg" alt="" />
        <img src="images/serv5.jpg" alt="" />
        <img src="images/serv5.jpg" alt="" />
        <img src="images/serv5.jpg" alt="" />
      </div>
    </div>

    <section id="tab">
      <h1>Sai Car Service Center</h1>
      <p>
        Skilled technicians for top-notch maintenance, repairs, and upgrades,
        ensuring your vehicle receives the care it deserves.
      </p>
      <p>Peth Vadgaon, Kolhapur</p>
      <br />

      <h2>Our Services</h2>

      <div class="content">
        <div class="card">
          <img src="images/serv1.jpeg" alt="" />

          <div class="card-detail">
            <h5>Periodic Servicing <br />Rs. 300</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />

          <div class="card-detail">
            <h5>AC Service & Repair <br />Rs. 500</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>
              Battries <br />
              <br />
              Rs. 800
            </h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>Tyre & Wheel Care <br />Rs. 800</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>Denting & Painting <br />Rs. 800</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>Detailing Services <br />Rs. 800</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>Car Spa & Cleaning <br />Rs. 800</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>
              Car Inspection <br />
              <br />
              Rs. 800
            </h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>Suspension & Fitments <br />Rs. 800</h5>
          </div>
        </div>

        <div class="card">
          <img src="images/serv1.jpeg" alt="" />
          <div class="card-detail">
            <h5>Clutch & body parts <br />Rs. 800</h5>
          </div>
        </div>
      </div>
      <br /><br /><br />

      <?php
    if(isset($_GET['date'])){
        $date = $_GET['date'];
    }?>

      <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
      <h1>Book your Appointment here !</h1>
      <br />

      
      <form action=""  method="post" autocomplete="off">
        <label for="name">Name: </label>
        <input type="text" class="input" name="name"/><br /><br />
       
        <label for="email">Email Address: </label>
        <input type="text" class="input" name="email"  /><br /><br />
        <label for="phone">Mobile Number: </label>
        <input type="text" class="input" name="phone"/><br /><br />
        <label for="cname"> Car Name: </label>
        <input type="text" class="input" name="c_name"/><br /><br />
        <label for="cmodel">Car Model: </label>
        <input type="text" class="input" name="c_model"/><br /><br />
        <label for="reg">Car Registration Number </label>
        <input type="text" class="input" name="c_reg"/><br /><br />
        <label for="services">Select the Services: </label><br />
        
            <input type="checkbox" id="service1" name="services[ ]" value="Maintainance">
            <label for="service1"> car maintainance</label>
            <input type="checkbox" id="service2" name="services[ ]" value="car wash">
            <label for="service2"> car wash</label><br>
            <input type="checkbox" id="service3" name="services[ ]" value="car paint">
            <label for="service3"> car paint</label><br>
            <input type="checkbox" id="service4" name="services[ ]" value="car body working">
            <label for="service4"> car body works</label><br>
            <input type="checkbox" id="service5" name="services[ ]" value="AC ">
            <label for="service5"> car air conditioning</label><br>
            <input type="checkbox" id="service6" name="services[ ]" value="car mechanic">
            <label for="service6"> car mechanic</label><br><br>
       
        <label>Do you need car pickup facility?</label>
            <div>
              <input type="radio" value="yes" id="radio_1" name="pickup" />
              <label for="radio_1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input type="radio" value="no" id="radio_2" name="pickup" />
              <label for="radio_2" class="radio"><span>No</span></label>
            </div><br><br>

        <label for="address">If yes Car Pickup and Drop Address(If no Plz refer the address of our servicing center at the end of this form)</label>
        <input type="text" class="input" name="address" /><br /><br />
        <label for="firstname">Pickup Time </label>
        <input type="time" class="input" name="time" /><br /><br />
        <label for="note">Anything you want to say? </label>
        <textarea rows="3" name="note"></textarea><br /><br />
        
      

        <button
          type="submit"
          class="btn btn-dark btn-lg download-button"
          onclick="openPopup()"
          name="submit"
        >
          Book
        </button>
        <?php


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST["phone"];
    $c_name = $_POST['c_name'];
    $c_model = $_POST['c_model'];
    $c_reg = $_POST['c_reg'];
    $services=$_POST['services']; 
    $xyz=implode(",",$services);
    $pickup = $_POST['pickup'];
    $address = $_POST['address'];
    $time = $_POST['time'];
    $note = $_POST['note'];
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = "INSERT INTO saics VALUES('$name','$email', $phone, '$c_name', '$c_model', '$c_reg', '$xyz', '$pickup', '$address', '$time', '$note', '$date')";
    //$stmt->bind_param('sssssssssssssssss', $name, $email, $phone, $c_name, $c_model, $c_reg, $service, $pickup, $address, $time, $note, $date);
    //$stmt->execute();
    //$msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $query=mysqli_query($mysqli,$stmt);
    if ($query) {
      echo"Your appointment is booked successfully!";
    }else{
      echo "Data Not Insrted";
    }
   // $stmt->close();
    //$mysqli->close();
}

?>
        <div class="popup" id="popup">
          <img src="images/yellow-tick.png" alt="" />
          <h2>Thank You!</h2>
          <p>Your appointment is booked successfully!</p>
          <a href="dashboard.php">
            <button type="button">OK</button>
          </a>
        </div>
        <br /><br /><br />
      </form>
      <div>
            <h1>Our Address:</h1>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.874067615666!2d74.31690727467802!3d16.832602383963053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc105fc8cf0850d%3A0xd0d4c18bdc178cbc!2sSai%20Servicing%20Center%2C%20Peth%20Vadgaon-%20near%20Police%20Station!5e0!3m2!1sen!2sin!4v1685095758672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        </div>

      <script>
        let popup = document.getElementById("popup");

        function openPopup() {
          popup.classList.add("open-popup");
        }
      </script>

      
    </section>
    <div>
            <h1>Our Address:</h1>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.874067615666!2d74.31690727467802!3d16.832602383963053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc105fc8cf0850d%3A0xd0d4c18bdc178cbc!2sSai%20Servicing%20Center%2C%20Peth%20Vadgaon-%20near%20Police%20Station!5e0!3m2!1sen!2sin!4v1685095758672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        </div>
  </body>
</html>
