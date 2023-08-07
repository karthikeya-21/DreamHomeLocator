<?php
include 'includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted
    if (isset($_POST['edit'])) {
        // Get the ID from the URL
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        // Get the feature values from the form
        $f1 = $_POST['f1'];
        $f2 = $_POST['f2'];
        $f3 = $_POST['f3'];
        $f4 = $_POST['f4'];
        $f5 = $_POST['f5'];
        $f6 = $_POST['f6'];

        // Update the features in the database
        $query = "UPDATE static_content SET f1='$f1', f2='$f2', f3='$f3', f4='$f4', f5='$f5', f6='$f6' WHERE id=$id";
        $result = mysqli_query($connection, $query);

        if ($result) {
            // Redirect back to the page where the form was submitted
            header('Location: features-section.php');
            exit();
        } else {
            // Handle the error (you can display an error message or log the error)
            echo "Error updating features: " . mysqli_error($connection);
        }
    }
}
?>
