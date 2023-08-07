<?php include 'includes/connection.php';?>

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

<script>
  function submitForm() {
    document.getElementById("filters").submit();
}
</script>
<link href="css/style.css" rel="stylesheet">
<style>
  .centered-container {
    padding:200px;
    margin-left:250px;
    text-align: center;
  }
</style>
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
    <form action="" method="post">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">
              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <select id="loc" name="loc" class="form-select">
                    <optgroup>
                      <option <?= (!isset($_POST['loc']) || $_POST['loc'] === 'Location') ? 'selected' : '' ?>>Location</option>
                      <option <?= (isset($_POST['loc']) && $_POST['loc'] === 'Madhapur') ? 'selected' : '' ?>>Madhapur</option>
                      <option <?= (isset($_POST['loc']) && $_POST['loc'] === 'GachiBowli') ? 'selected' : '' ?>>GachiBowli</option>
                      <option <?= (isset($_POST['loc']) && $_POST['loc'] === 'Bengaluru') ? 'selected' : '' ?>>Bengaluru</option>
                      <option <?= (isset($_POST['loc']) && $_POST['loc'] === 'Shamshabad') ? 'selected' : '' ?>>Shamshabad</option>
                      <option <?= (isset($_POST['loc']) && $_POST['loc'] === 'Hitech City') ? 'selected' : '' ?>>Hitech City</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <select id="cat" name="cat" class="form-select">
                    <optgroup>
                      <option <?= (!isset($_POST['cat']) || $_POST['cat'] === 'Category') ? 'selected' : '' ?>>Category</option>
                      <option <?= (isset($_POST['cat']) && $_POST['cat'] === 'Bungalow') ? 'selected' : '' ?>>Bungalow</option>
                      <option <?= (isset($_POST['cat']) && $_POST['cat'] === 'Duplex') ? 'selected' : '' ?>>Duplex</option>
                      <option <?= (isset($_POST['cat']) && $_POST['cat'] === 'Villa') ? 'selected' : '' ?>>Villa</option>
                      <option <?= (isset($_POST['cat']) && $_POST['cat'] === 'Farm House') ? 'selected' : '' ?>>Farm House</option>
                      <option <?= (isset($_POST['cat']) && $_POST['cat'] === 'Hotel') ? 'selected' : '' ?>>Hotel</option>
                      <option <?= (isset($_POST['cat']) && $_POST['cat'] === 'Cottage') ? 'selected' : '' ?>>Cottage</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <select id="prop" name="prop" class="form-select">
                    <optgroup>
                      <option <?= (!isset($_POST['prop']) || $_POST['prop'] === 'Property Type') ? 'selected' : '' ?>>Property Type</option>
                      <option <?= (isset($_POST['prop']) && $_POST['prop'] === 'Residential Properties') ? 'selected' : '' ?>>Residential Properties</option>
                      <option <?= (isset($_POST['prop']) && $_POST['prop'] === 'Commercial Properties') ? 'selected' : '' ?>>Commercial Properties</option>
                      <option <?= (isset($_POST['prop']) && $_POST['prop'] === 'Industrial Properties') ? 'selected' : '' ?>>Industrial Properties</option>
                      <option <?= (isset($_POST['prop']) && $_POST['prop'] === 'Waterfront Properties') ? 'selected' : '' ?>>Waterfront Properties</option>
                      <option <?= (isset($_POST['prop']) && $_POST['prop'] === 'Luxury Properties') ? 'selected' : '' ?>>Luxury Properties</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <button class="btn btn-primary" style="padding-left: 50px; padding-right: 50px;">Search</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </section>
<!-- Your form code -->
<form id="filters" action="" method="post">
    <div class="tabbed-filter">
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['filter'])) { ?>
        <input type="radio" id="highest_rated" name="filter" value="highest_rated" onchange="submitForm()" <?php echo ($_POST['filter'] == 'highest_rated') ? 'checked' : ''; ?>>
        <label for="highest_rated">Highest Rated</label>

        <input type="radio" id="most_popular" name="filter" value="most_popular" onchange="submitForm()" <?php echo ($_POST['filter'] == 'most_popular') ? 'checked' : ''; ?>>
        <label for="most_popular">Most Popular</label>

        <input type="radio" id="oldest" name="filter" value="oldest" onchange="submitForm()" <?php echo ($_POST['filter'] == 'oldest') ? 'checked' : ''; ?>>
        <label for="oldest">Oldest</label>

        <input type="radio" id="new_market" name="filter" value="new_market" onchange="submitForm()" <?php echo ($_POST['filter'] == 'new_market') ? 'checked' : ''; ?>>
        <label for="new_market">New to Market</label>

        <input type="radio" id="price-low-to-high" name="filter" value="price_low_high" onchange="submitForm()" <?php echo ($_POST['filter'] == 'price_low_high') ? 'checked' : ''; ?>>
        <label for="price-low-to-high">Price Low to High</label>

        <input type="radio" id="price-high-to-low" name="filter" value="price_high_low" onchange="submitForm()" <?php echo ($_POST['filter'] == 'price_high_low') ? 'checked' : ''; ?>>
        <label for="price-high-to-low">Price High to Low</label>
    <?php } else{ ?>
      <input type="radio" id="highest_rated" name="filter" onchange="submitForm()">
        <label for="highest_rated">Highest Rated</label>

        <input type="radio" id="most_popular" name="filter" onchange="submitForm()">
        <label for="most_popular">Most Popular</label>

        <input type="radio" id="oldest" name="filter" onchange="submitForm()">
        <label for="oldest">Oldest</label>

        <input type="radio" id="new_market" name="filter"  checked onchange="submitForm()">
        <label for="new_market">New to Market</label>

        <input type="radio" id="price-low-to-high" name="filter" value="price_low_high" onchange="submitForm()">
        <label for="price-low-to-high">Price Low to High</label>

        <input type="radio" id="price-high-to-low" name="filter"  value="price_high_low" onchange="submitForm()">
        <label for="price-high-to-low">Price High to Low</label>
        <?php } ?>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cat'])) { ?>
          <input type="hidden" name="loc" value="<?= $_POST['loc'];?>">
          <input type="hidden" name="cat" value="<?= $_POST['cat'];?>">
          <input type="hidden" name="prop" value="<?= $_POST['prop'];?>">

          <?php } ?>
    </div>
</form>


<div class="main-content">
    <!-- Start of Properties -->
    <div class="grid-container">
    <?php
        $query = "SELECT * FROM properties WHERE 1";
        $location = $_POST["loc"] ?? '';
        $category = $_POST["cat"] ?? '';
        $propertyType = $_POST["prop"] ?? '';
        if ($location!='Location' && !empty($location)) {
          $query .= " AND address like '%$location%'";
      }
  
      if ($category!='Category' && !empty($category)) {
          $query .= " AND category = '$category'";
      }
  
      if ($propertyType!='Property Type' && !empty($propertyType)) {
          $query .= " AND property = '$propertyType'";
      }
      $sortBy = $_POST["filter"] ?? 'new_market';
      switch ($sortBy) {
          case 'highest_rated':
              $query .= " ORDER BY price DESC";
              break;
          case 'most_popular':
              $query .= " ORDER BY date_added DESC";
              break;
          case 'oldest':
              $query .= " ORDER BY date_added ASC";
              break;
          case 'new_market':
              $query .= " ORDER BY date_added DESC";
              break;
          case 'price_low_high':
              $query .= " ORDER BY price ASC";
              break;
          case 'price_high_low':
              $query .= " ORDER BY price DESC";
              break;
          default:
          $query .= " ORDER BY date_added DESC";
          break;
      }
        $result = mysqli_query($connection, $query);
        $rowcount=mysqli_num_rows($result);
        if($rowcount>0){
        while($row = mysqli_fetch_assoc($result)){ ?>
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
<?php } }else{ ?>


  <div class="container my-5 centered-container">
  <br>  <center><b>No Property Found!</b></center><br>
</div>


  <?php } ?>
  <!-- Add more grid items as needed -->
</div>

</div>

</div>

<?php include 'includes/footer.php'?>