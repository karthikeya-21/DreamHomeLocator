<?php include 'includes/connection.php';
      $query = "SELECT * FROM blogs";
      $result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>DreamHomeLocator</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="img/favicon.ico" rel="icon">


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
        <li class="nav-item active">
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

<div class="main2">
    <h3 style="padding-left:50px;padding-bottom:50px;"><b>Blogs and Newsletters</b></h3>


<div class="main-content">
    <!-- Start of Properties -->
    <div class="grid-container">
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
<a href="blog-details.php?id=<?=$row['id']?>">
    <div class="grid-item">
        <hr>
  <div class="property-info2">
    <p class="for-sale"><?=$row['type']?></p><br>
  </div>
  <div class="property-details">
    <div class="property-feature"><?=$row['name']?></div>
    <div class="property-feature"><?=$row['logs']?></div>
  </div>
  <div class="property-image" style="background-image:url('img/new/<?=$row['pic1']?>')"></div>

  <div class="property-address">
    <div class="location-details"><p>READ BLOG</p></div>
    <div class="heart-icon"></div>
    <div class="vector"></div>
  </div>
  <hr>
</div>
</a>
<?php } ?>
  <!-- Add more grid items as needed -->
</div>

</div>

</div>

<?php include 'includes/footer.php'?>