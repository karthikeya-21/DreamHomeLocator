<?php
// delete-blog.php

// Include the necessary files and establish the database connection
include 'includes/connection.php';

// Check if the blog ID is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $blogId = $_GET['id'];

    // Delete the blog entry from the database
    $deleteQuery = "DELETE FROM blogs WHERE id = $blogId";
    $deleteResult = mysqli_query($connection, $deleteQuery);

    if ($deleteResult) {
        // Deletion successful
        // Redirect to some success page or the blog listing page
        header("Location: blog-section.php"); // Replace blog-listing.php with the actual page name
        exit();
    } else {
        // Deletion failed
        // Display an error message or handle it as per your requirement
        echo "Error deleting blog: " . mysqli_error($connection);
    }
} else {
    // If no valid blog ID is provided in the URL, redirect to some error page or the blog listing page
    header("Location: blog-section.php"); // Replace blog-listing.php with the actual page name
    exit();
}

// Close the database connection
mysqli_close($connection);
?>
