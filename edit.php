<?php
include_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission and update the user
    $id = intval($_POST['id']);
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare an UPDATE statement
    $sql = "UPDATE users SET firstName = ?, lastName = ?, email = ?, password = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("ssssi", $firstName, $lastName, $email, $password, $id);
    
    if ($stmt->execute()) {
        header("Location: dashboard.php?msg=updated");
        exit();
    } else {
        echo "Error updating user: " . $stmt->error;
    }
    
    $stmt->close();
    exit();
}

// If we're here via GET, we need to display the form with current data.
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Prepare a SELECT statement to fetch the user data
    $sql = "SELECT * FROM users WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if (!$user) {
        echo "User not found.";
        exit();
    }
    
    $stmt->close();
} else {
    echo "No user ID specified.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="styles.css">

    <style>

    body {
      background: #f4f4f4;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #333;
    }
 
    .edit-container {
      width: 90%;
      max-width: 500px;
      margin: 50px auto;
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #003366;
    }
    form label {
      display: block;
      margin-bottom: 15px;
      font-weight: bold;
    }
    form input[type="text"],
    form input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }
   
    


    form input[type="submit"] {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: #003366;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
    }

    form input[type="submit"]:hover {
      background-color: #00509e;
    }
 
    
    .back-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #003366;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }
    .back-link:hover {
      background-color: #00509e;
    }
  </style>
</head>
<body>
    <h1>Edit User</h1>
    <form action="edit.php" method="post">
        <!-- Hidden field to pass the user id -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['Id']); ?>">
        
        <label>First Name:
            <input type="text" name="firstName" value="<?php echo htmlspecialchars($user['firstName']); ?>" required>
        </label><br>
        
        <label>Last Name:
            <input type="text" name="lastName" value="<?php echo htmlspecialchars($user['lastName']); ?>" required>
        </label><br>
        
        <label>Email:
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </label><br>
        
        <label>Password:
            <input type="text" name="password" value="<?php echo htmlspecialchars($user['password']); ?>" required>
        </label><br>
        
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="dashboard.php" style="padding: 16px; color: #fff; background-color: #003366; border-radius: 16px; text-decoration: none;" >BACK?</a>
</body>
</html>
