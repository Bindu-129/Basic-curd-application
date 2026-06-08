<?php
include("db.php");

if(isset($_POST['register']))
{
    $username=$_POST['username'];

    $password=password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    $sql="INSERT INTO users(username,password)
          VALUES('$username','$password')";

    mysqli_query($conn,$sql);
}
?>

<form method="POST">
<input type="text"
name="username"
placeholder="Username">

<input type="password"
name="password"
placeholder="Password">

<button name="register">
Register
</button>
</form>