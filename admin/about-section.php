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
          <li class="breadcrumb-item"><a href="inde2x.php">CRM</a></li>
          <li class="breadcrumb-item active">About</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
<div class="row">
        <div class="col-12">
        <div class="card">
            <form method="POST" action="edit-about.php?id=<?=$row['id']?>" id="uploadForm" enctype="multipart/form-data">
            <div class="card-header">
                <h3 class="card-title">Update About</h3>
            </div>
            <div class="card-body">
                <div class="row m-3">
                    <div class="col-lg-8 col-sm-12">
                         <label>Header:</label>
                        <input type="text" name="about" id="" value="<?=$row['about']?>" class="form-control">
                    </div>
                </div>
            <div class="row m-3">
                    <div class="col-lg-8 col-sm-12">
                        <label class="mt-3">Description:</label>
                    <textarea name="description" id="" cols="80" rows="10"><?=$row['description_about']?></textarea>
            </div>
                </div>
        <div class="card-footer m-3">
            <input type="submit" name="edit" class="btn btn-danger">
        </div>
        </div></form>
    </div>
</div>
<!-- row opened -->
<!-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Image Update</div>
            </div>
            <div class="card-body">
                
                
                
            </div>
        </div>
    </div>
</div>
 -->



</div>
    </section>
  </main><!-- End #main -->
<?php include 'includes/footer.php';?>