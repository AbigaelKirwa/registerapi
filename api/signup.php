<?php
include "connect.php";

if(isset($_POST['register'])){
    die();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $cpassword = $_POST['cpassword'];

    $sql_insert = "INSERT INTO register(`name`, `email`, `phone_number`, `password` , `cpassword`) VALUES ('$name','$email','$phone','$password','$cpassword')"; 
    
    if($conn -> query($sql_insert) === TRUE)
    {
        echo json_encode(array('result'=> "success"));
        //echo '<script>alert("Succesful registration <br> <hl> WELCOME</h1>)</script>"';
        //header("Location: signin.php");
    }
    else{
        header("refresh:0; url= register.php");
        echo'<script>alert("Registration unsuccessful. Try again")</script>';
    }
}
?>  