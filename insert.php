<?php
/* Insert information into database upon form submission */
/* Greg Vedders - 2/6/2020 */

// Include database configuration
include("config.php");

// Create SQL statement
$query = "INSERT INTO student (firstName, lastName, email) VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[email]')";

// Insert information into database
if (!mysqli_query($db, $query)) {
        // Display error if present
        die('An error occurred when submitting your review.');
    } else {
      // Redirect upon completion
      header("Location: index.php");
    }
?>
