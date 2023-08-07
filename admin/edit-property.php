<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
    $propertyId = $_GET['id'];
    $query = "SELECT * FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index2.php">Property</a></li>
        <li class="breadcrumb-item active">Edit Property</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="app-content icon-content">
      <div class="section">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form method="POST" action="property2.php?id=<?=$propertyId?>" id="uploadForm" enctype="multipart/form-data">
                <div class="card-header">
                  <h3 class="card-title">Edit Property</h3>
                </div>
                <div class="card-body">
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Name</label>
                      <input type="text" name="name" id="" class="form-control" value="<?=$row['name']?>">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Address</label>
                      <input type="text" name="address" id="" class="form-control" value="<?=$row['address']?>">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Price</label>
                      <input type="text" name="price" id="" class="form-control" value="<?=$row['price']?>">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Year of Built</label>
                      <input type="num" name="year" id="" class="form-control" value="<?=$row['year']?>">
                    </div>
                  </div>
                  <div class="row m-3">
                  <div class="col-lg-4 col-sm-12">
  <!-- <label>Category</label> -->
  <select id="cat" name="cat" class="form-select">
    <optgroup>
      <option disabled>Category</option>
      <option <?=($row['category'] === 'Bungalow') ? 'selected' : ''?>>Bungalow</option>
      <option <?=($row['category'] === 'Duplex') ? 'selected' : ''?>>Duplex</option>
      <option <?=($row['category'] === 'Villa') ? 'selected' : ''?>>Villa</option>
      <option <?=($row['category'] === 'Apartment') ? 'selected' : ''?>>Apartment</option>
      <option <?=($row['category'] === 'Farm House') ? 'selected' : ''?>>Farm House</option>
      <option <?=($row['category'] === 'Hotel') ? 'selected' : ''?>>Hotel</option>
      <option <?=($row['category'] === 'Cottage') ? 'selected' : ''?>>Cottage</option>
    </optgroup>
  </select>
</div>

          <div class="col-lg-4 col-sm-12">
  <!-- <label>Property Type</label> -->
  <select id="prop" name="prop" class="form-select">
    <optgroup>
    <option disabled>Properties</option>
      <option <?=($row['property'] === 'Residential Properties') ? 'selected' : ''?>>Residential Properties</option>
      <option <?=($row['property'] === 'Commercial Properties') ? 'selected' : ''?>>Commercial Properties</option>
      <option <?=($row['property'] === 'Industrial Properties') ? 'selected' : ''?>>Industrial Properties</option>
      <option <?=($row['property'] === 'Waterfront Properties') ? 'selected' : ''?>>Waterfront Properties</option>
      <option <?=($row['property'] === 'Luxury Properties') ? 'selected' : ''?>>Luxury Properties</option>
    </optgroup>
  </select>
</div>

            </div>
                  <div class="row m-3">
					<div class="col-lg-4 col-sm-12">
							<label>No. of Bedrooms</label>
							<input type="text" name="bedrooms" class="form-control" value="<?=$row['bedrooms']?>">
					</div>
					<div class="col-lg-4 col-sm-12">
							<label>No. of Halls</label>
							<input type="text" name="halls" class="form-control" value="<?=$row['halls']?>">
					</div>
                    </div>
                    <div class="row m-3">
					<div class="col-lg-4 col-sm-12">
							<label>No. of Kitchen</label>
							<input type="text" name="kitchen" class="form-control" value="<?=$row['kitchen']?>">
					</div>
					<div class="col-lg-4 col-sm-12">
							<label>Area in sqft</label>
							<input type="text" name="area" class="form-control" value="<?=$row['area']?>">
					</div>
                    </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Picture 1</label>
                      <input type="file" name="pic1" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Picture 2</label>
                      <input type="file" name="pic2" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Picture 3</label>
                      <input type="file" name="pic3" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Picture 4</label>
                      <input type="file" name="pic4" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Picture 5</label>
                      <input type="file" name="pic5" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label class="mt-3">Description:</label>
					  <textarea name="description" id="" cols="80" rows="10"><?=$row['description']?></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer m-3">
                  <input type="submit" name="submit" class="btn btn-danger">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->

<?php include 'includes/footer.php';?>
