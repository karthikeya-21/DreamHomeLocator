<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>DreamHomeLocator</title>

<!-- Favicons -->
<link href="img/favicon.ico" rel="icon">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


<link href="css/style.css" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <div class="logo">
        <h1 class="text-light"><a href="index.php">DreamHomeLocator.com</a></h1>
      </div> -->

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <!-- Nav bar Logo -->
      <div class="logo">
      <img src="img/new/Navlogo-bg.png" alt="logo"><b>DreamHomeLocator.com</b>

      </div>
    </a>
    <div class="collapse navbar-collapse justify-content-end">
      <!-- Nav bar AL (Auto layout) -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="properties.php">Properties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class="main2">
  <div class="container">
    <h3><b>Reach Out To Us</b></h3>
    <div class="row">
      <div class="col-md-6">
        <!-- Contact Form -->
        <form action="form-submit.php" method="POST">
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="fullname">Full name <sup>*</sup></label>
                <input type="text" id="fullname" name="fullname" class="form-control" required/>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="phno">Phone Number<sup>*</sup></label>
                <input type="text" id="phno" name="phno" class="form-control" required/>
              </div>
            </div>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="email">Email address<sup>*</sup></label>
            <input type="email" id="email" name="email" class="form-control" required/>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="enquiry">What is your enquiry about?<sup>*</sup></label>
            <select id="enquiry" name="enquiry" class="form-select" required>
              <option value="">Select an option</option>
              <option value="general">General Inquiry</option>
              <option value="support">Technical Support</option>
              <option value="billing">Billing and Payments</option>
            </select>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="description">Description<sup>*</sup></label>
            <textarea id="description" name="description" class="form-control" required></textarea>
          </div>
          <center><input type="submit" name="submit" value="Send Message" class="btn btn-primary btn-block mb-4"></center>
        </form>
      </div>

      <div class="col-md-6">
        <h3>Get in touch to schedule a visit to your new house.</h3>
        <p>Kindly fill this form with your details about your inquiries and we would respond to your inquiry shortly.</p>
        <hr>
        <?php include 'includes/connection.php';
            $query = "SELECT * FROM static_content";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="social-contacts">
          <div class="contact-detail">
            <i class="far fa-envelope"></i>
            <div class="contact-text">
              <h5>Send an email</h5>
              <p><?=$row['email']?></p>
            </div>
          </div>
          <div class="contact-detail">
            <i class="fas fa-phone-alt"></i>
            <div class="contact-text">
              <h5>Give us a call</h5>
              <p><?=$row['mobileno']?></p>
            </div>
          </div>
          <div class="contact-detail">
            <i class="fas fa-map-marker-alt"></i>
            <div class="contact-text">
              <h5>Office address</h5>
              <p><?=$row['address']?></p>
            </div>
          </div>
          <div class="contact-detail">
            <i class="fas fa-map-marker-alt"></i>
            <div class="contact-text">
              <h5>Working hours</h5>
              <p>Mon - Fri: 10am - 5pm</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- team-->
<div class="custom-container">

<section2>
<div class="team">
  <div>
    <h1><b>The Board</b></h1><br>
    </p>
  </div>
<br>
<br>
<!-- team members-->
<?php
include 'includes/connection.php';
    $query = "SELECT * FROM team";
    $result = mysqli_query($connection, $query);
?>
<div class="container">
<div class="row" >

    <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <div class="card">
      <img src="img/new/<?=$row['pic']?>" class="card-img-top rounded-circle" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?=$row['name']?></h5>
        <p class="card-text" style="color:#4DD3F5;"><?=$row['designation']?></p>
      </div>
    </div>
    <?php } ?>
    </div>
</div>
</div>
</section2>
</div>



<?php include 'includes/footer.php'?>