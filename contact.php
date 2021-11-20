<?php
//variable setting
$name = $_REQUEST['name'];
$name = $_REQUEST['email'];
$name = $_REQUEST['message'];

//check input fields
if (empty($name) || empty($email) || empty($message))
{
    echo "please fill all the field"
}
else
{
    mail("abhishek7091668703@gmail.com", "appoinment request",$message , "From: $name <$email>");
    echo"<script type'text/javascript'></script>"
}
?>