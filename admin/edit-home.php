<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="app-content icon-content">
					<div class="section">
							<!-- row opened -->
						<div class="row">
							<div class="col-12">
								<div class="card">
										<form method="POST" id="uploadForm" enctype="multipart/form-data">
									<div class="card-header">
										<div class="card-title">Edit Home Section</div>
									</div>
									<div class="card-body">
										
												<label>Header:</label>
                                                <input type="text" class="form-control" name="" id="">
								<label>Content:</label>
                                <input type="text" name="" class="form-control" id="">
									</div>
									<div class="card-footer">
										<input type="submit" name="edit" value="Update" class="btn btn-danger">
									
									</div>
								</form>
								</div>
							</div>
						</div>
						<!-- row closed -->

						<!-- row opened -->
					
						<!-- row closed -->
					</div>
				</div>
    </section>
  </main><!-- End #main -->
<?php include 'includes/footer.php';?>