<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
      $query = "SELECT * FROM enquiry";
      $result = mysqli_query($connection, $query);
?>

  <main id="main" class="main">
  <div class="app-content icon-content">
  <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <div class="app-content icon-content">
					<div class="section">

						<!-- Page-header opened -->

<table width="100%" class="table table-responsive table-striped mb-0 text-nowrap px-5" style="width:100%;">
					<thead style="text-align:center;" class="px-5">
						<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Message</th>
						<th>Description</th>
						<th>Date</th>
						<th>Action</th>
						</tr>
					</thead>
				<tbody class="text-center px-5">
				<?php 
				$c=0;
				while($row = mysqli_fetch_assoc($result)){
					$c=$c+1;
					?>
				<tr>
				<td><?=$c?></td>
				<td><?=$row['name']?></td>
				<td><?=$row['mobile']?></td>
				<td><?=$row['email']?></td>
				<td><?=$row['about']?></td>
				<td><?=$row['description']?></td>
				<td><?=$row['date_added']?></td>
				<td class="w-1">
					<a href="contact-detail.php?id=<?=$row['id']?>" class="btn btn-danger icon text-white"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php } ?>
				</tbody>
					</table>
				</div>
			</div>
    </main><!-- End #main -->
<?php include 'includes/footer.php';?>