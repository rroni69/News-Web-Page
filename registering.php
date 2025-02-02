<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (ob_get_level()) ob_end_clean();
include 'connect.php';



if(isset($_POST['signUp'])){
    $firstname = $_POST['fName'];
    $lastname = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * from users WHERE email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;'>
        <h1 style='color: red;'>Email address already exists</h1>
        <a href='login.php' style='text-decoration: none; color: blue; font-size: 20px;'>Log In?</a>
      </div>";
        
    }
    else{
        $insertQuery = "INSERT INTO users(firstname, lastname, email, password)
                        VALUES ('$firstname','$lastname', '$email', '$password' )";

                        if($conn->query($insertQuery)==TRUE){
                            header("location: login.php?signin=true");
                            exit();

                        }else {
                            echo "Error: ".$conn->error;
                        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * from users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];

        header("Location: homepage.php");
        ob_end_flush();
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}

?>