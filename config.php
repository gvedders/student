<?php

/* Configuration to connect to database */
/* Greg Vedders - 2/6/2020 */

// Database configuration variables
$host = "server.name";
$username = "uname";
$password = pass";
$db_name = "uname_student";

// Connect to database
$db = mysqli_connect($host, $username, $password, $db_name);

// Display error if present
$connection_error = $db->$connection_error;
if ($connection_error != null) {
    echo "<p>Error connecting to database: $connection_error</p>";
    exit();
}

?>
