<?php include 'includes/connection.php';
      $id=$_GET['id'];
      $query = "SELECT * FROM properties where id=$id";
      $result = mysqli_query($connection, $query);
      $row =mysqli_fetch_assoc($result);
?>
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
        <li class="nav-item active">
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

<div class="main2">
    <h3 style="padding-left:50px;"><b>Explore Your Dream Property...</b></h3>
    <section id="about" class="about">
    <form action="properties.php" method="post">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">
            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <select id="loc" name="loc" class="form-select">
                    <optgroup>
                      <option>Location</option>
                      <option>Madhapur</option>
                      <option>GachiBowli</option>
                      <option>Bengaluru</option>
                      <option>Shamshabad</option>
                      <option>Hitech City</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <select id="cat" name="cat" class="form-select">
                    <optgroup>
                      <option>Category</option>
                      <option>Bungalow</option>
                      <option>Duplex</option>
                      <option>Farm House</option>
                      <option>Hotel</option>
                      <option>Cottage</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <select id="prop" name="prop" class="form-select">
                    <optgroup>
                      <option>Property Type</option>
                      <option>Residential Properties</option>
                      <option>Commercial Properties</option>
                      <option>Industrial Properties</option>
                      <option>Waterfront Properties</option>
                      <option>Luxury Properties</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <button class="btn btn-primary" style="padding-left: 50px;padding-right:50px;">Search</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <div class="details-content">
        <hr>
        <div class="property-card">
  <div class="property-price">₹ <?=$row['price']?></div>
  <div class="schedule-visit"><button class="btn btn-primary  " >Schedule Visit</button></div>
  <div class="property-address2"><?=$row['address']?></div>
</div>
<div class="container-details">
  <div class="column">
  <div class="image-grid">
    <img src="img/new/<?=$row['pic1']?>" alt="Image 1" class="image">
    <img src="img/new/<?=$row['pic2']?>" alt="Image 2" class="image">
    <img src="img/new/<?=$row['pic3']?>" alt="Image 3" class="image">
    <img src="img/new/<?=$row['pic4']?>" alt="Image 4" class="image">
    <img src="img/new/<?=$row['pic5']?>" alt="Image 5" class="image">
  </div>
  </div>
  <div class="column">
    <div class="property-details5">
    <ul style="color:black;">
      <li style="color:black;"><?=$row['bedrooms']?> Bedrooms</li>
      <li style="color:black;"><?=$row['halls']?> Halls</li>
      <li style="color:black;">1 Kitchen</li>
      <li style="color:black;"><?=$row['area']?> sq. ft.</li>
    </ul>
    </div>
    <p><?=$row['description']?></p>
</div>
</div>
        <hr>

    <center><h2>Similar Properties</h2></center>
        <div class="grid-container">
<?php 
$query = "SELECT * FROM properties where id!=$id LIMIT 3 ";
$result = mysqli_query($connection, $query);
      while($row =mysqli_fetch_assoc($result)){
?>
  <a href="details.php?id=<?=$row['id']?>">
    <div class="grid-item">
        <hr>
  <div class="property-info">
    <h2>₹ <?=$row['price']?></h2>
    <div class="for-sale">
      <p>For Sale</p>
    </div>
  </div>
  <div class="property-details">
    <div class="property-feature"><?=$row['bedrooms']?> Beds</div>
    <div class="property-feature"><?=$row['halls']?> Hall</div>
    <div class="property-feature"><?=$row['area']?> sqft</div>
    <div class="property-feature">Year Built :<?=$row['year']?></div>
  </div>
  <div class="property-image" style="background-image:url('img/new/<?=$row['pic1']?>')"></div>

  <div class="property-address">
    <div class="location-details"><p><?=$row['address']?></p></div>
    <div class="heart-icon"></div>
    <div class="vector"></div>
  </div>
  <hr>
</div>
</a>
<?php } // end of loop for similar property cards?>
  <!-- Add more grid items as needed -->
</div>

</div>
    </div>

<?php include 'includes/footer.php' ?>