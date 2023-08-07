<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index2.php">CRM</a></li>
        <li class="breadcrumb-item active">Blogs</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="app-content icon-content">
      <div class="section">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <form method="POST" action="blog.php" id="uploadForm" enctype="multipart/form-data">
                <div class="card-header">
                  <h3 class="card-title">Add Blog</h3>
                </div>
                <div class="card-body">
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Heading :</label>
                      <input type="text" name="heading" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Sub-Heading :</label>
                      <input type="text" name="sub-heading" id="" class="form-control">
                    </div>
                  </div>
                  <div class="row m-3">
                    <div class="col-md">
                      <label>Blog Type</label>
                      <input type="text" name="blog_type" id="" class="form-control">
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
                      <label>Name</label>
                      <input type="text" name="name" id="" class="form-control">
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
