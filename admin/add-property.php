<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index2.php">Property</a></li>
        <li class="breadcrumb-item active">Add Property</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="app-content icon-content">
      <div class="section">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form method="POST" action="property.php" id="uploadForm" enctype="multipart/form-data">
                <div class="card-header">
                  <h3 class="card-title">Add Property</h3>
                </div>
                <div class="card-body">
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Name</label>
                      <input type="text" name="name" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Address</label>
                      <input type="text" name="address" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Price</label>
                      <input type="text" name="price" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Year of Built</label>
                      <input type="num" name="year" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
					<div class="col-lg-4 col-sm-12">
							<!-- <label>Category</label> -->
              <select id="cat" name="cat" class="form-select">
                    <optgroup>
                      <option disabled selected>Category</option>
                      <option>Bungalow</option>
                      <option>Duplex</option>
                      <option >Villa</option>
                      <option>Apartment</option>
                      <option>Farm House</option>
                      <option>Hotel</option>
                      <option>Cottage</option>
                    </optgroup>
                  </select>
					</div>
					<div class="col-lg-4 col-sm-12">
							<!-- <label>Property Type</label> -->
              <select id="prop" name="prop" class="form-select">
                    <optgroup>
                      <option disabled selected>Property Type</option>
                      <option>Residential Properties</option>
                      <option>Commercial Properties</option>
                      <option>Industrial Properties</option>
                      <option>Waterfront Properties</option>
                      <option>Luxury Properties</option>
                    </optgroup>
                  </select>
					</div>
                    </div>
                  <div class="row m-3">
					<div class="col-lg-4 col-sm-12">
							<label>No. of Bedrooms</label>
							<input type="text" name="bedrooms"  class="form-control">
					</div>
					<div class="col-lg-4 col-sm-12">
							<label>No. of Halls</label>
							<input type="text" name="halls"  class="form-control">
					</div>
                    </div>
                    <div class="row m-3">
					<div class="col-lg-4 col-sm-12">
							<label>No. of Kitchen</label>
							<input type="text" name="kitchen" class="form-control">
					</div>
					<div class="col-lg-4 col-sm-12">
							<label>Area in sqft</label>
							<input type="text" name="area" class="form-control">
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
					  <textarea name="description" id="" cols="80" rows="10"></textarea>
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
