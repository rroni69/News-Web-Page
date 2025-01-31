<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <table border="1">
    <tr>
        <th>EMAIL</th>
        <th>PASSWORD</th> 

    </tr>

    <?php
    include_once 'connect.php'; 

    
    $users = getAllUsers($conn); 

    foreach ($users as $user) {
        echo "<tr>
                <td>{$user['email']}</td>
                <td>{$user['password']}</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>