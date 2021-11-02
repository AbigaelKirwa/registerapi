<?php
//create a connection
$conn = new mysqli("localhost", "root", "", "registerlogin");

//check connection
if($conn -> connect_error)
{
    die("Not connected".$conn -> connect_error);
} 

?>