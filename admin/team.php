<?php
// team.php

// Include the necessary files and establish the database connection
include 'includes/connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $teamId = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission

        // Get the form data
        $name = $_POST['name'];
        $designation = $_POST['designation'];

        // Check if a new picture is uploaded
        if (isset($_FILES['pic']) && $_FILES['pic']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['pic']['tmp_name'];
            $picName = $_FILES['pic']['name'];

            // Move the uploaded picture to the desired location (e.g., upload/team_pics/)
            $destination = '../img/new/' . $picName;
            move_uploaded_file($tmpName, $destination);

            // Update the team member details including the picture in the database
            $updateQuery = "UPDATE team SET name = '$name', designation = '$designation', pic = '$picName' WHERE id = $teamId";
        } else {
            // Update the team member details excluding the picture in the database
            $updateQuery = "UPDATE team SET name = '$name', designation = '$designation' WHERE id = $teamId";
        }

        $updateResult = mysqli_query($connection, $updateQuery);

        if ($updateResult) {
            // Update successful
            // Redirect to team-section.php on success
            header("Location: team-section.php");
            exit();
        } else {
            // Update failed
            // Display an error message or handle it as per your requirement
            echo "Error updating team member: " . mysqli_error($connection);
        }
    }
} else {
    // If no valid team ID is provided in the URL, redirect to some error page or the team-section.php
    header("Location: team-section.php");
    exit();
}

// Close the database connection
mysqli_close($connection);
?>
