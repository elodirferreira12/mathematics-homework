<?php
// Define constants
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'database_name');

// Create database connection
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// SQL query to fetch data from the database
$sql = "SELECT * FROM table_name";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><thead><tr><th>Name</th><th>Age</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "No records found.";
}

// Close database connection
$db->close();
?>
