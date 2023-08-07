<?php
include 'includes/connection.php';
if(isset($_POST['edit'])){
    $id=$_GET['id'];
	$header=$_POST['header'];
	$query = "UPDATE static_content SET header = '$header' WHERE id = '$id'";
	$result = mysqli_query($connection, $query);
    if($result){
        header("Location: home-section.php");
    }
}