<?php

include_once 'connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM users WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: dashboard.php?msg=deleted");
        exit();
    } else {
        echo "Error deleting user: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "No user ID specified.";
}
?>


