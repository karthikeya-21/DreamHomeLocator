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
      <h1>Contacts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item active">Contacts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
 <div class="row">
<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">

                                       <div class="card  box-shadow-0 mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Contact Detail</h4>
                            </div>
                            <br>
                            <!--<div class="card-body">-->
                            <!--	<form method="POST" id="Form" enctype="multipart/form-data" class="form-horizontal" >-->
                            <!--		<div class="form-group row">-->
                            <!--			<label for="inputName1" class="col-md-3 col-form-label">Social Media:</label>-->
                            <!--			<div class="col-md-9">-->
                            <!--		<label class="form-label" for="exampleInputname">Hide/Show</label>-->
                            <!--			 <label class="custom-switch">-->
<!--                                   <input type="checkbox" name="link" class="custom-switch-input" value="1"-->
<!--                                   checked>-->
<!--                                   <span class="custom-switch-indicator"></span>-->
<!--                               </label>-->
                            <!--			</div>-->
                            <!--		</div>-->
                                    
                                    
                            <!--		<div class="form-group mb-0 mt-3 row justify-content-end">-->
                            <!--			<div class="col-md-9">-->
                            <!--				<button type="submit" name="save" class="btn btn-primary">Update</button>-->
                            <!--				<button type="submit" class="btn btn-secondary">Cancel</button>-->
                            <!--			</div>-->
                            <!--		</div>-->
                            <!--	</form>-->
                            <!--</div>-->
                            <div class="card-body">
                                <form method="POST" id="uploadForm" action="edit-contact.php?id=<?=$row['id']?>" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName1" class="col-md-3 col-form-label">Address</label>
                                        <div class="col-md-9">
                                            <input type="text" name="address" id="" value="<?=$row['address']?>" class="form-control">
                                        </div>
                                    </div><br>
                                        <!-- <div class="form-group row">
                                        <label for="inputName1" class="col-md-3 col-form-label">Address 2:</label>
                                        <div class="col-md-9">
                                            <p>No 606, 29th main road, corporate colony jayanagar 560069</p>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="inputEmai2" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-9">
                                                <input type="email" name="email" id="" value="<?=$row['email']?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-md-3 col-form-label">Mobile No</label>
                                        <div class="col-md-9">
                                            <input type="text" name="phno" id="" value="<?=$row['mobileno']?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-md-3 col-form-label">Twitter Link</label>
                                        <div class="col-md-9">
                                            <input type="text" name="twitter" id="" value="<?=$row['twitter']?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-md-3 col-form-label">Linkedin Link</label>
                                        <div class="col-md-9">
                                            <input type="text" name="youtube" id="" value="<?=$row['youtube']?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-md-3 col-form-label">Facebook Link</label>
                                        <div class="col-md-9">
                                            <input type="text" name="facebook" id="" value="<?=$row['facebook']?>" class="form-control">
                                        </div>
                                    </div><br>
                                        <div class="form-group row">
                                        <label for="inputPassword4" class="col-md-3 col-form-label">Instagram Link</label>
                                        <div class="col-md-9">
                                            <input type="text" name="instagram" id="" value="<?=$row['instagram']?>" class="form-control">
                                        </div>
                                    </div><br>
                                    <div class="card-footer m-3">
				                            <input type="submit" name="edit" class="btn btn-danger">
			                            </div>
                                </form>
                            </div>
                            
                            
                                
                        </div>
                    </div>
<!-- Banner opened -->

</div>
</section>
    </main><!-- End #main -->

<?php include 'includes/footer.php';?>