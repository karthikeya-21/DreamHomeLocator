<?php
// Assuming you have included the necessary files and established a database connection
include 'includes/connection.php';

if (isset($_GET['id'])) {
    $enquiryId = $_GET['id'];

    // Perform validation on $enquiryId if needed

    // Delete the enquiry from the 'enquiry' table
    $query = "DELETE FROM enquiry WHERE id = $enquiryId";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Enquiry deleted successfully, redirect back to the page displaying all enquiries
        header("Location: enquiry-section.php");
        exit;
    } else {
        // Error occurred while deleting the enquiry
        echo "Error deleting enquiry: " . mysqli_error($connection);
    }
} else {
    // No enquiry ID provided, handle accordingly
    echo "No enquiry ID provided!";
}
?>
