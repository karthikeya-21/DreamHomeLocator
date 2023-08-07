<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    // Include the connection and any other necessary files
    include 'includes/connection.php';

    // Get the form data
    $about = mysqli_real_escape_string($connection, $_POST['about']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    // Update the about data in the database
    $query = "UPDATE static_content SET
              about = '$about',
              description_about = '$description'
              WHERE id = " . $_GET['id'];
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to the about page after successful update
        header("Location: about-section.php");
        exit;
    } else {
        // Handle the update error if needed
    }
}

// Redirect back to the about page if the user directly accesses this file without form submission
header("Location: about-section.php");
exit;
