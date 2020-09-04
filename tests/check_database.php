<?php
/**
 * Check the database connection details are ok.
 *
 * *** Temporary script that should be deleted before putting live! ***
 *
 * PHP version 7.4
 */

/**
 * Database connection data
 */
$host = "localhost";
$db_name = "mvc_database";
$user = "mvc_user";
$password = "secret";

/**
 * Create a connection
 */
$conn = new mysqli($host, $user, $password, $db_name);

/**
 * Check the connection
 */
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully, connection data are ok.";
}
