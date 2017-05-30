<?php include "Connection.php";


if (isset($_POST["submit"]))
{    
    global $connection ;
    $username= $_POST["username"];
    $email =$_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    
    
    $hashformat = "$2y$10";
    $salt = "313412341234fdjdsfhuwqefw";
    $hashf_and_salt = $hashformat.$salt;
    $passwordhash = crypt($password1, $hashf_and_salt);
    
    
    $query = "INSERT INTO login (username, email, password1, password2) VALUES ('$username', '$email', '$passwordhash', '$password2')";
   
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
    die ("failed");
    }
    else 
        echo "Du har skapat ett account";
    
       header("location: home.php");
        die;
    
}


?>