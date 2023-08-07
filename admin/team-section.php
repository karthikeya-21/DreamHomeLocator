<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
      $query = "SELECT * FROM team";
      $result = mysqli_query($connection, $query);
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
    <section class="section">
      <div class="row row-cards">
	  <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-4 col-lg-4 col-xl-4">
								<div class="card">
									<img class="card-img-topbr-tr-0 br-tl-0" src="../img/new/<?=$row['pic']?>" style="height:220px;" alt="Card image cap">
									<div class="card-body">
									  <h3 class="card-title text-center"><?=$row['name']?></h3>
									   <h4 class="card-title text-center"><?=$row['designation']?></h4>
									   	<a href="edit-team.php?id=<?=$row['id']?>" class="btn btn-success icon text-white"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- col end -->
						</div>
    </section>
  </main><!-- End #main -->
<?php include 'includes/footer.php';?>