<?php
// Assuming you have included the necessary files and established a database connection
include 'includes/connection.php';
if (isset($_GET['id'])) {
    $propertyId = $_GET['id'];

    // Check if the property exists in the database
    $query = "SELECT * FROM properties WHERE id = $propertyId";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        // Property found, proceed with deletion

        // Delete the property from the database
        $deleteQuery = "DELETE FROM properties WHERE id = $propertyId";
        $deleteResult = mysqli_query($connection, $deleteQuery);

        if ($deleteResult) {
            // Property deleted successfully, redirect to properties-section.php
            header("Location: property-section.php");
            exit;
        } else {
            // Error occurred during deletion
            echo "Error deleting property: " . mysqli_error($connection);
        }
    } else {
        // Property not found in the database
        echo "Property not found!";
    }
} else {
    // No property ID provided in the URL
    echo "Invalid property ID!";
}
?>
