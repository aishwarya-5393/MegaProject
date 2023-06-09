
<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<?php 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Handle the logout form submission
if ( isset($_GET['logout'])) {
    // Clear all session data
    session_unset();

    // Destroy the session
    session_destroy();

    
    echo "Successfully Logged Out";
    header("Location: login.php?logout=true");
    exit();
}
?>
    </body>
</html>