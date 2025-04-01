<?php
// This PHP script is for demonstration purposes only. In real projects, you should use actual data and models.
// Example of how to connect to a database:

// Assuming $pdo is an instance of PDO prepared statement
// You should replace this with your actual database connection parameters

try {
    // Prepare the SQL query
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Bind the parameter to the query
    $stmt->bindParam(':id', 1);  // Replace 1 with your actual ID

    // Execute the query
    $stmt->execute();

    // Fetch and print the result (assuming 'users' table has a column named 'name')
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
