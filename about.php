<?php include 'includes/connection.php';
      $query = "SELECT * FROM static_content";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
?>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DreamHomeLocator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="img/favicon.ico" rel="icon">

<!-- css-->
<link rel="stylesheet" href="css/style.css">

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
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="properties.php">Properties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<div class="main">
      <h1><b><?=$row['about']?></b></h1>
        <div class="container">
            <div class="box">
              <div class="left">
                <p><?=$row['description_about']?></p>
              </div>
              <div class="right">
                <img src="https://manofmany.com/wp-content/uploads/2020/12/Masculine-living-room.png">
              </div>
        </div>
      </div>
</div>

<section id="features">
  <h1><b>Our Features</b> </h1>
<!-- row 1-->
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="card" id="c1">
        <div class="card-body" >
          <h5 class="card-title">Prime Locations</h5>
          <p class="card-text"><?=$row['f1']?></p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card" id="c2">
        <div class="card-body" >
          <h5 class="card-title">Prime Locations</h5>
          <p class="card-text"><?=$row['f2']?></p>
        </div>
      </div>
    </div>
  </div>
<!-- image with circle row-2 -->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Great Environment</h5>
          <p class="card-text"><?=$row['f3']?></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
          <div class="circular-img2" style="height:250px;width:250px;"><img style="" src="img/new/download.png" ></div>
      </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Great Environment</h5>
          <p class="card-text"><?=$row['f4']?></p>
        </div>
      </div>
    </div>
  </div>
<!-- row 3-->
<div class="row">
  <div class="col-sm-6">
    <div class="card" id="c3">
      <div class="card-body" >
        <h5 class="card-title">Prime Locations</h5>
        <p class="card-text"><?=$row['f5']?></p>
      
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" id="c4">
      <div class="card-body" >
        <h5 class="card-title">Prime Locations</h5>
        <p class="card-text"><?=$row['f6']?></p>
        
      </div>
    </div>
  </div>
</div>
</div>
</section>

<!-- team-->
<div class="custom-container">

<section2>
<div class="team">
  <div>
    <h1><b>Meet Our Team</b></h1><br>
    <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. It usually begins with:
    </p>
  </div>
<br>
<br>
<!-- team members-->

<?php 
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
<?php include 'includes/footer.php' ?>