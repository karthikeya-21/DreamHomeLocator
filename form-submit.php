<?php
// Assuming you have included the necessary files and established a database connection
include 'includes/connection.php';

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $enquiry = $_POST['enquiry'];
    $description = $_POST['description'];
    $date = date("F j, Y");
    // Perform validation if needed

    // Insert data into the 'enquiry' table
    $query = "INSERT INTO enquiry (name, mobile, email, about, description,date_added) VALUES ('$fullname', '$phno', '$email', '$enquiry', '$description','$date')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Data saved successfully, redirect to contact.php
        header("Location: contact.php");
        exit;
    } else {
        // Error occurred during data insertion
        echo "Error saving data: " . mysqli_error($connection);
    }
} else {
    // Form was not submitted, handle accordingly
    echo "Form was not submitted!";
}
?>
