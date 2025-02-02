<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
</head>
<body>
<div class="admin-dashboard">
<h1>DASHBOARD</h1>
    <table border="1">
    <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th> 

    </tr>

    <?php
    include_once 'connect.php'; 

    
    $users = getAllUsers($conn); 

    foreach ($users as $user) {
        echo "<tr>
                <td>{$user['firstName']}</td>
                <td>{$user['lastName']}</td>
                <td>{$user['email']}</td>
                <td>{$user['password']}</td>
              </tr>";
    }
    ?>
</table>
</div>

</body>
</html>