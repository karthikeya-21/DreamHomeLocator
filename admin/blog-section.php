<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
      $query = "SELECT * FROM blogs";
      $result = mysqli_query($connection, $query);
?>

<main id="main" class="main">
<div class="pagetitle d-flex justify-content-between">
	<nav>
	<h1>Dashboard</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index2.php">CRM</a></li>
      <li class="breadcrumb-item active">Blogs</li>
    </ol>
  </nav>
  <button class="btn btn-primary py-0" onclick="location.href='add-blog.php'">Add New Blog</button>

</div><!-- End Page Title -->

    <section class="section">
    <div class="row row-cards row-deck">
							<?php while($row = mysqli_fetch_assoc($result)){ ?>
							<div class="col-md-4 col-lg-4 col-xl-4">
								<div class="card">
									<img class="card-img-topbr-tr-0 br-tl-0" src="../img/new/<?=$row['pic1']?>" style="height:220px;" alt="Card image cap">
									<div class="card-header">
										<p class="card-title"><?=$row['type']?></p>
									</div>
									<div class="card-body">
										<p class="card-title"><?=$row['heading']?></p>
								<a href="edit-blog.php?id=<?=$row['id']?>" class="btn btn-success icon text-white"><i class="fa fa-edit"></i></a>
								<a href="delete-blog.php?id=<?=$row['id']?>" class="btn btn-danger icon text-white"><i class="fa fa-trash"></i></a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
    </section>
</main><!-- End #main -->
<?php include 'includes/footer.php';?>