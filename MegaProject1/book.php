<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

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
      $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    }else{
      echo "Data Not Insrted";
    }
   // $stmt->close();
    //$mysqli->close();
}

?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> book </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 36px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #333; 
      }
      .banner {
        imag
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #333;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #333;
      color: #333;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      /*input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }*/
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #444;
      background: #444;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #444;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #666;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>

  <body>
    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <?php echo isset($msg)?$msg:''; ?>
               <div class="testbox">
      <form action="" method="post" autocomplete="off">
        <div class="banner">
          <center><img src="car_book1.png"></center>
        </div>
        <div class="item">
          <p>Name</p>
            <input type="text" name="name" placeholder="name" />
        </div>
        <div class="item">
          <p>Email</p>
          <input type="text" name="email"/>
        </div>
        <div class="item">
          <p>Phone No.</p>
          <input type="number" name="phone"/>
        </div>
        <div class="item">
          <p>Car Detils</p>
          <div class="name-item">
            <input type="text" name="c_name" placeholder="Company Name" />
            <input type="text" name="c_model" placeholder="Model" />
            <input type="text" name="c_reg" placeholder="Reg Number" />

          </div>
        </div>

        <div class="item">
            <label for="">Services</label>
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
            <label for="service6"> car mechanic</label><br>
        </div>
        <div class="question">
          <p>Do you need car pickup facility?</p>
          <div class="question-answer">
            <div>
              <input type="radio" value="yes" id="radio_1" name="pickup" />
              <label for="radio_1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input type="radio" value="no" id="radio_2" name="pickup" />
              <label for="radio_2" class="radio"><span>No</span></label>
            </div>

          </div>
        </div>
        <div class="item">

          <p> If yes Car Pickup and Drop Address(If no Plz refer the address of our servicing center at the end of this form)</p>
          <input type="text" name="address" placeholder="address" />
          
          
        </div>
        
        <div class="item">
          <p>Pick Up Time</p>
          <input type="t" name="time" />
          
        </div>
    
        
        <div class="item">
          <p>Anything you want to say?</p>
          <textarea rows="3" name="note"></textarea>
        </div>
        <div class="btn-block">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
      </form>
    </div>
    <div>
            <h1>Our Address:</h1>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.874067615666!2d74.31690727467802!3d16.832602383963053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc105fc8cf0850d%3A0xd0d4c18bdc178cbc!2sSai%20Servicing%20Center%2C%20Peth%20Vadgaon-%20near%20Police%20Station!5e0!3m2!1sen!2sin!4v1685095758672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
