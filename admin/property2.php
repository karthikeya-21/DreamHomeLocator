<?php
include 'includes/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $propertyId = $_GET['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $prop=$_POST['prop'];
    $cat=$_POST['cat'];
    $bedrooms = $_POST['bedrooms'];
    $halls = $_POST['halls'];
    $kitchen = $_POST['kitchen'];
    $area = $_POST['area'];
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $updateQuery = "UPDATE properties SET name='$name', address='$address', price='$price', year='$year', property='$prop', category='$cat', bedrooms='$bedrooms', halls='$halls', kitchen='$kitchen', area='$area', description='$description' WHERE id = $propertyId";
    $updateResult = mysqli_query($connection, $updateQuery);

// File upload for Picture 1
if ($_FILES['pic1']['name']) {
    $pic1Name = $_FILES['pic1']['name'];
    $pic1TmpName = $_FILES['pic1']['tmp_name'];
    move_uploaded_file($pic1TmpName, '../img/new/' . $pic1Name);
} else {
    $query = "SELECT pic1 FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $pic1Name = $row['pic1'];
}

// File upload for Picture 2
if ($_FILES['pic2']['name']) {
    $pic2Name = $_FILES['pic2']['name'];
    $pic2TmpName = $_FILES['pic2']['tmp_name'];
    move_uploaded_file($pic2TmpName, '../img/new/' . $pic2Name);
} else {
    $query = "SELECT pic2 FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $pic2Name = $row['pic2'];
}

// File upload for Picture 3
if ($_FILES['pic3']['name']) {
    $pic3Name = $_FILES['pic3']['name'];
    $pic3TmpName = $_FILES['pic3']['tmp_name'];
    move_uploaded_file($pic3TmpName, '../img/new/' . $pic3Name);
} else {
    $query = "SELECT pic3 FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $pic3Name = $row['pic3'];
}

// File upload for Picture 4
if ($_FILES['pic4']['name']) {
    $pic4Name = $_FILES['pic4']['name'];
    $pic4TmpName = $_FILES['pic4']['tmp_name'];
    move_uploaded_file($pic4TmpName, '../img/new/' . $pic4Name);
} else {
    $query = "SELECT pic4 FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $pic4Name = $row['pic4'];
}

// File upload for Picture 5
if ($_FILES['pic5']['name']) {
    $pic5Name = $_FILES['pic5']['name'];
    $pic5TmpName = $_FILES['pic5']['tmp_name'];
    move_uploaded_file($pic5TmpName, '../img/new/' . $pic5Name);
} else {
    $query = "SELECT pic5 FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $pic5Name = $row['pic5'];
}
// Update the picture names in the database
$updatePicsQuery = "UPDATE properties SET pic1='$pic1Name', pic2='$pic2Name', pic3='$pic3Name', pic4='$pic4Name', pic5='$pic5Name' WHERE id = $propertyId";
mysqli_query($connection, $updatePicsQuery);

// Redirect to properties-section.php on success
header("Location: property-section.php");
exit();
}
?>
