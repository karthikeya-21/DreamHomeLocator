<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/connection.php';
      $query = "SELECT * FROM properties";
      $result = mysqli_query($connection, $query);
?>
  <main id="main" class="main">
  <div class="pagetitle d-flex justify-content-between">
	<nav>
	<h1>Dashboard</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index2.php">Property</a></li>
      <li class="breadcrumb-item active">Properties</li>
    </ol>
  </nav>
  <button class="btn btn-primary py-0" onclick="location.href='add-property.php'">Add New Property</button>

</div><!-- End Page Title -->
<div class="app-content icon-content">
			<div class="section">
				<table class="table table-responsive-md table-striped mb-0 text-nowrap">
						<thead style="text-align:center;">
						<tr>
						<th>Id</th>
						<th>Property Name</th>
						<th>Price</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody style="text-align:center;">
					<?php 
					$c=0;
					while($row = mysqli_fetch_assoc($result)){
						$c=$c+1;
						?>
						<tr>
						<td><?=$c?></td>
						<td><?=$row['name']?></td>
						<td><?=$row['price']?></td>
						<td class="w-1">
							<a href="edit-property.php?id=<?=$row['id']?>" class="btn btn-success icon text-white"><i class="fa fa-edit"></i></a>
							<a href="delete-property.php?id=<?=$row['id']?>" class="btn btn-danger icon text-white" cursorshover="true"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

            </main><!-- End #main -->
<?php include 'includes/footer.php';?>