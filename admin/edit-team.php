<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
    $teamId = $_GET['id'];
    $query = "SELECT * FROM team WHERE id = $teamId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">CRM</a></li>
          <li class="breadcrumb-item active">Team</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="app-content icon-content">
					<div class="section">
    <div class="row">
     	<div class="col-12">
					<div class="card">
				<form method="POST" action="team.php?id=<?=$teamId?>" id="uploadForm" enctype="multipart/form-data">
					<div class="card-header">
										<h3 class="card-title">Edit Blog</h3>
									</div>
									<div class="card-body">
									<div class="row m-3">
					<div class="col-lg-4 col-sm-12">
							<label>Enter Name:</label>
							<input type="text" name="name" value="<?=$row['name']?>" class="form-control">
					</div>
					<div class="col-lg-4 col-sm-12">
							<label>Enter Designation:</label>
							<input type="text" name="designation" value="<?=$row['designation']?>" class="form-control">
					</div>
					<div class="row m-3">
                    <div class="col-md">
                      <label>Picture 2</label>
                      <input type="file" name="pic" id="" value="<?=$row['pic']?>" class="form-control">
                    </div>
                  </div>
					</div>
							<div class="card-footer m-3">
								<input type="submit" name="submit" class="btn btn-danger" value="Submit">
							</div>
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