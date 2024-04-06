<?php

header("Access-Control-Allow-Origin: http://localhost:3000");


// Establish connection to the MySQL database
$servername = "localhost"; // Change to your MySQL server address
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "walldecor"; // Change to your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the database
$sql = "SELECT *  FROM luxdecor"; // Change "your_table" to your actual table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Array to hold fetched data
    $data = array();

    // Fetch each row from the result set
    while($row = $result->fetch_assoc()) {
        // Add each row as an associative array to the data array
        $data[] = $row;
    }

    // Convert data array to JSON format
    $json_data = json_encode($data);

    // Output JSON data
    header('Content-Type: application/json');
    echo $json_data;
} else {
    // No data found
    echo "No data found";
}

// Close connection
$conn->close();
?>
