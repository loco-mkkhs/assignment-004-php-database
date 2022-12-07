<?php
if(isset($_POST["submitButton"]))
{

//1. fetch form data
$email =$_POST['email'];

//2. submit form data
$insertData = mysqli_query($conn, "INSERT INTO subscribers(email) VALUES('$email')");
if($insertData)
{
    echo "Data submitted sucessfully.";
}
else{
    echo "Error occured";
}

}
?>