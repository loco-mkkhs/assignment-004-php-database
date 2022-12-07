<?php
require_once('dbconnection')
if(isset($_POST["submitButton"]))
{

//1. fetch form data
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$phonenumber =$_POST['phonenumber'];
$message =$_POST['message'];
//2. submit form data
$insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message) VALUES('$firstname','
$lastname','$email','$phonenumber','$message')");
if($insertData)
{
    echo "Data submitted sucessfully.";
}
else{
    echo "Error occured";
}

}
?>