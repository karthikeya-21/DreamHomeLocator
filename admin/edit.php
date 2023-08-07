<?php
// edit.php

// Include the necessary files and establish the database connection
include 'includes/connection.php';

// Check if the blog ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $blogId = $_GET['id'];

    // Check if the form is submitted for updating the blog
    if (isset($_POST['update'])) {
        $heading = $_POST['heading'];
        $subHeading = $_POST['sub-heading'];
        $blogType = $_POST['blog_type'];
        $name = $_POST['name'];
        $description = mysqli_real_escape_string($connection, $_POST['description']);

        // File upload for Picture 1
        if ($_FILES['pic1']['name']) {
            $pic1Name = $_FILES['pic1']['name'];
            $pic1TmpName = $_FILES['pic1']['tmp_name'];
            move_uploaded_file($pic1TmpName, '../img/new/' . $pic1Name);
        } else {
            $query = "SELECT pic1 FROM blogs WHERE id = $blogId";
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
            $query = "SELECT pic2 FROM blogs WHERE id = $blogId";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            $pic2Name = $row['pic2'];
        }

        // Assuming you have a suitable table structure for blogs, adjust the update query accordingly
        $updateQuery = "UPDATE blogs SET heading = '$heading', subheading = '$subHeading', type = '$blogType', name = '$name', blog_description = '$description', pic1 = '$pic1Name', pic2 = '$pic2Name' WHERE id = $blogId";

        // Execute the update query
        $updateResult = mysqli_query($connection, $updateQuery);

        if ($updateResult) {
            // Update successful
            // Redirect to some success page or the blog listing page
            header("Location: blog-section.php"); // Replace blog-listing.php with the actual page name
            exit();
        } else {
            // Update failed
            // Display an error message or handle it as per your requirement
            echo "Error updating blog: " . mysqli_error($connection);
        }
    }
}
// Close the database connection
mysqli_close($connection);
?>
