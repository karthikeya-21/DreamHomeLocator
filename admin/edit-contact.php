<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    // Include the connection and any other necessary files
    include 'includes/connection.php';

    // Get the form data
	$id=$_GET['id'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $twitter = $_POST['twitter'];
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];

    // Update the database
    $query = "UPDATE static_content SET 
              address = '$address',
              email = '$email',
              mobileno = '$phno',
              twitter = '$twitter',
              youtube = '$youtube',
              facebook = '$facebook',
              instagram = '$instagram'
              WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Redirect back to the contacts page after successful update
        header("Location: contact-section.php");
        exit;
    } else {
        // Handle the update error if needed
    }
}

// The rest of your HTML content and form here...
?>
