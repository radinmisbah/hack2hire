<?php
include "FacilityManager.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    // Ensure the form fields are not empty
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        // Get the submitted email and password
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Create a FacilityManager instance
        $facilityManager = new FacilityManager();

        // Call the signin method to validate the credentials
        if ($facilityManager->signin($email, $password)) {
            // Sign-in was successful; you can redirect or perform other actions here
            echo '<script>alert("Sign-in successful. Welcome, ' . $username . '!");</script>';
        } else {
            // Sign-in failed; display an error message or redirect to a login page
            echo '<script>alert("Sign-in failed. Invalid credentials.");</script>';
        }
    } else {
        // Handle empty form fields
        echo "Please provide both a email and a password.";
    }
  
}


?>