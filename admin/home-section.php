<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
      $query = "SELECT * FROM static_content";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
?>

<main id="main" class="main">

<section class="section">
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
		<div class="row">
			<div class="col-12">
			<div class="card">
				<form method="POST" action="edit-home2.php?id=<?=$row['id']?>" id="uploadForm" enctype="multipart/form-data">
				<div class="card-header">
					<h3 class="card-title">Update Home</h3>
				</div>
				<div class="card-body">
					<div class="row m-3">
						<div class="col-lg-8 col-sm-12">
						<label>Header:</label>
						<input type="text" name="header" id="" class="form-control" value="<?=$row['header']?>">
						</div>
					</div>
			<div class="card-footer m-3">
				<input type="submit" name="edit" class="btn btn-danger">
			</div>
			</div></form>
		</div>
	</div>
</div>
</section>
</main>

<?php include 'includes/footer.php';?>