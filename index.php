<?php include 'includes/connection.php';
      $query = "SELECT * FROM static_content";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
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
        <li class="nav-item active">
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
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1><?=$row['header']?></h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
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
                      <option >Apartment</option>
                      <option >Villa</option>
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
    </section><!-- End About Section -->

    <section id="cta" class="cta">
      <div class="container">
        <div class="text-center">
          <h3>Featured Properties</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna.
            Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices.</p>
            <div class="container-pics">
              <div class="left-image">
                  <img src="img/new/Img1.png" alt="Left Image">
              </div>
              <div class="right-images">
                  <img  src="img/new/Img3.png" alt="Right Image 1">
                  <img src="img/new/Img3.png" alt="Right Image 2">
                  <img src="img/new/Img4.png" alt="Right Image 3">
                  <img src="img/new/Img5.png" alt="Right Image 4">
              </div>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
      <div class="container">

        <div class="section-title pt-5">
          <h2>Recent Properties</h2>
          <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. 
            Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
        <div class="grid-wrapper">
        <img src="img/new/Img6.png" alt="..." height="" width="" />
        <div class="content-wrapper">
          <div class="content">
            <div class="title-description">
              <h2 class="title">
                3BHK Flat , Delhi
              </h2>
              <p class="description">
                Lorel epsum 
              </p>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="content">
            <div class="title-description">
              <h2 class="title">
                5B2HK Luxury Flat, Delhi
              </h2>
              <p class="description">
                Lorel epsum 
              </p>
            </div>
          </div>
        </div>
        <img src="img/new/Img7.png" alt="..." height="" width="" />
        </div>
      </div>
      <center><button onclick="location.href='properties.php'" class="custom-button">View More</button></center>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

<?php include 'includes/footer.php' ?>