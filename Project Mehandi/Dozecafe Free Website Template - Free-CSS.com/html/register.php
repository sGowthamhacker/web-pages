<?php
include("db/config.php");
if(isset($_POST['submit']))

{
        $name=$_POST['name'];
        $lname=$_POST['lname'];
        $email=$_POST['Email'];
        $password=$_POST['Password'];
        $text=$_POST['PhoneNo'];
        
        $sql = "INSERT INTO users VALUES ('', '$name','$lname','$email','$password','$text')";
        mysqli_query($mysqli, $sql);
        header("Location: index.html");
}
?>


