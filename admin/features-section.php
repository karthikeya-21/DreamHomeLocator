<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
      $query = "SELECT * FROM static_content";
      $result = mysqli_query($connection, $query);
      $row = mysqli_fetch_assoc($result);
?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">CRM</a></li>
          <li class="breadcrumb-item active">Features</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
<div class="row">
        <div class="col-12">
        <div class="card">
            <form method="POST" action="edit-features.php?id=<?=$row['id']?>" id="uploadForm" enctype="multipart/form-data">
            <div class="card-header">
                <h3 class="card-title">Update Features</h3>
            </div>
            <div class="card-body">
                <div class="row m-3">
                    <div class="col-md-12">
                         <label>Feature 1:</label>
                        <input type="text" name="f1" id="" value="<?=$row['f1']?>" class="form-control">
                    </div>
                </div>
				<div class="row m-3">
                    <div class="col-md-12">
                         <label>Feature 2:</label>
                        <input type="text" name="f2" id="" value="<?=$row['f2']?>" class="form-control">
                    </div>
                </div>
				<div class="row m-3">
                    <div class="col-md-12">
                         <label>Feature 3:</label>
                        <input type="text" name="f3" id="" value="<?=$row['f3']?>" class="form-control">
                    </div>
                </div>
				<div class="row m-3">
                    <div class="col-md-12">
                         <label>Feature 4:</label>
                        <input type="text" name="f4" id="" value="<?=$row['f4']?>" class="form-control">
                    </div>
                </div>
				<div class="row m-3">
                    <div class="col-md-12">
                         <label>Feature 5:</label>
                        <input type="text" name="f5" id="" value="<?=$row['f5']?>" class="form-control">
                    </div>
                </div>
				<div class="row m-3">
                    <div class="col-md-12">
                         <label>Feature 6:</label>
                        <input type="text" name="f6" id="" value="<?=$row['f6']?>" class="form-control">
                    </div>
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
  </main><!-- End #main -->
<?php include 'includes/footer.php';?>