<?php
include 'includes/connection.php';

if (isset($_POST['submit'])) {
    $heading = $_POST['heading'];
    $subHeading = $_POST['sub-heading'];
    $blogType = $_POST['blog_type'];
    $name = $_POST['name'];
    $description = mysqli_real_escape_string($connection, $_POST['description']);

    // Handling file uploads (assuming you have appropriate upload handling code)
    $pic1 = $_FILES['pic1']['name'];
    $pic2 = $_FILES['pic2']['name'];
    $dateOfEntry = date('F j, Y');

    // You need to process the uploaded images and move them to a suitable location on the server
    // For example, you can use move_uploaded_file() function
    // Here's an example (Make sure to change the directory path):
    move_uploaded_file($_FILES['pic1']['tmp_name'], '../img/new/' . $pic1);
    move_uploaded_file($_FILES['pic2']['tmp_name'], '../img/new/' . $pic2);

    // Assuming you have a suitable table structure for blogs, adjust the query accordingly
    $query = "INSERT INTO blogs (heading, subheading,type, pic1, pic2, name, blog_description,logs) 
              VALUES ('$heading', '$subHeading', '$blogType', '$pic1', '$pic2', '$name', '$description','$dateOfEntry')";

    // Execute the query
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Insertion successful
        // Redirect to some page or display a success message
        header("Location: blog-section.php"); // Replace success.php with the desired page
        exit();
    } else {
        // Insertion failed
        // Display an error message or handle it as per your requirement
        echo "Error: " . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>
