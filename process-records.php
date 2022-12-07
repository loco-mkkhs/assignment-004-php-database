<?php
require_once('dbconnection')

if(isset($_POST["submitfutton"]))
{

//1. fetch form data

$email =$_POST['email'];

//2. submit form data
$insertdata = mysqli_query($conn, "INSERT INTO subscribers(email) VALUES(
'$email')");
if($insertdata)
{
    echo "Data submitted sucessfully.";
}
else{
    echo "Error occured";
}

}
?>