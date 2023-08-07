<?php
// property.php

// Include the necessary files and establish the database connection
include 'includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Handle form submission

    // Get the form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $cat=$_POST['cat'];
    $prop=$_POST['prop'];
    $bedrooms = $_POST['bedrooms'];
    $halls = $_POST['halls'];
    $kitchen = $_POST['kitchen'];
    $area = $_POST['area'];
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    // Check if pictures are uploaded and move them to the desired location (e.g., upload/property_pics/)

    // Picture 1
    if (isset($_FILES['pic1']) && $_FILES['pic1']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['pic1']['tmp_name'];
        $pic1Name = $_FILES['pic1']['name'];
        move_uploaded_file($tmpName, '../img/new/' . $pic1Name);
    } else {
        $pic1Name = ''; // If no picture is uploaded, set an empty string for the picture name
    }

    // Picture 2
    if (isset($_FILES['pic2']) && $_FILES['pic2']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['pic2']['tmp_name'];
        $pic2Name = $_FILES['pic2']['name'];
        move_uploaded_file($tmpName, '../img/new/' . $pic2Name);
    } else {
        $pic2Name = '';
    }

    // Picture 3
    if (isset($_FILES['pic3']) && $_FILES['pic3']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['pic3']['tmp_name'];
        $pic3Name = $_FILES['pic3']['name'];
        move_uploaded_file($tmpName, '../img/new/' . $pic3Name);
    } else {
        $pic3Name = '';
    }

    if (isset($_FILES['pic4']) && $_FILES['pic4']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['pic4']['tmp_name'];
        $pic4Name = $_FILES['pic4']['name'];
        move_uploaded_file($tmpName, '../img/new/' . $pic4Name);
    } else {
        $pic4Name = '';
    }

    if (isset($_FILES['pic5']) && $_FILES['pic5']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['pic5']['tmp_name'];
        $pic5Name = $_FILES['pic5']['name'];
        move_uploaded_file($tmpName, '../img/new/' . $pic5Name);
    } else {
        $pic5Name = '';
    }

    // Insert the property details into the database
    $date = date("F j, Y"); // Get the current date in the format: "Month day, Year"
    $insertQuery = "INSERT INTO properties (name, address, price, year,category,property, bedrooms, halls, kitchen, area, pic1, pic2, pic3, pic4, pic5, description, date_added) VALUES ('$name', '$address', '$price', '$year','$cat' ,'$prop' , '$bedrooms', '$halls', '$kitchen', '$area', '$pic1Name', '$pic2Name', '$pic3Name', '$pic4Name', '$pic5Name', '$description', '$date')";

    $insertResult = mysqli_query($connection, $insertQuery);

    if ($insertResult) {
        // Insertion successful
        // Redirect to properties-section.php on success
        header("Location: property-section.php");
        exit();
    } else {
        // Insertion failed
        // Display an error message or handle it as per your requirement
        echo "Error inserting property: " . mysqli_error($connection);
    }
}
// Close the database connection
mysqli_close($connection);
?>
