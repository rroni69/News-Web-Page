<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .admin-dashboard {
      width: 80%;
      margin: 2rem auto;
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 4px;
    }

    .admin-dashboard h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #003366;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table thead {
      background: #003366;
      color: #fff;
    }

    table th, 
    table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table tr:hover {
      background: #f1f1f1;
    }

    
    a {
      color: #003366;
      text-decoration: none;
      font-weight: bold;
    }

    a:hover {
      text-decoration: underline;
    }

   
    .back-link {
      display: block;
      width: fit-content;
      margin: 20px auto;
      background: #003366;
      color: #fff;
      padding: 10px 20px;
      border-radius: 4px;
      text-align: center;
    }
  </style>
    <title>Dashboard</title>
</head>
<body>
<div class="admin-dashboard">
<h1>DASHBOARD</h1>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th> 
        <th>EDIT</th>
        <th>DELETE</th>     

    </tr>

    <?php
    include_once 'connect.php'; 

    
    $users = getAllUsers($conn); 

    foreach ($users as $user) {
        echo "<tr>
                <td>{$user['Id']}</td>
                <td>{$user['firstName']}</td>
                <td>{$user['lastName']}</td>
                <td>{$user['email']}</td>
                <td>{$user['password']}</td>
                <td><a href='edit.php?id={$user['Id']}'>edit</a></td>
                <td><a href='delete.php?id={$user['Id']}'>delete</a></td>
              </tr>";
    }
    ?>
</table>
</div>
<br><br>
<a href="homepage.php" style="padding: 16px; color: #fff; background-color: #003366; border-radius: 16px; text-decoration: none;" >BACK?</a>
</body>
</html>