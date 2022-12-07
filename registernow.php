<?php
require_once('dbconnection')
if(isset($_POST["submitbutton"]))
{

//1. fetch form data
$fullname =$_POST['fullname'];
$phonenumber =$_POST['phonenumber'];
$emailaddress =$_POST['emailaddress'];
$gender =$_POST['gender'];
$course =$_POST['course'];
//2. submit form data
$insertData = mysqli_query($conn, "INSERT INTO registrationdetails(fullname,phonenumber,emailaddress,gender,course) VALUES('$fullname','
$phonenumber','$emailaddress','$gender','$course')");
if($insertData)
{
    echo "Data submitted sucessfully.";
}
else{
    echo "Error occured";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <title>Bootstrap-Gridlayout</title>
    <link rel="stylesheet" href="aboutus.php">
    <link rel="stylesheet" href="index.php">
    
    
</head>
<body>
    <!-- navigation bar here -->
    <?php include('navbar.php')?>
    <!-- End navigation bar here -->
    
    <div class="container">
        <main class="p-5 mb-4 shadow ">

            <h1>JULY SOFTWARE ENGINEEERING BOOTCAMP</h1>
        
                                 
                <span text-align="start"><i class="fa fa-calendar fa-2x"></i></span>
                <span>20th July 2022</span><br>
                <span text-align="start"><i class="fa fa-map-marker fa-2x"></i></span>
                <span>Zalego Academy,<br>Devan Plaza</span>
    
        
            
        </main>
        <div class="row">
            <center><p>Looking for a place to kickstart your carrer in technology?<br>whether you're in a local town, new in town or just crusing through we've got <br> loads of great tips and events for you.</p></center>
        </div>
        <center><h1>sign up today?</h1></center>
       
        <br>
        <form action="registernow.php" method="POST">
            <div class="row">
               

                <div class="mb-3 col-lg-6">
                    <label for="Full Name:" class="form label">Full Name:</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Please enter your  Full Name">

                </div>
                <div class="mb-3 col-lg-6">
                    <label for="Phone Number" class="form-label">Phone Number:</label>
                    <input type="tel" name="phonenumber" class="form-control" placeholder="Please enter your Phone Number">

                </div>
            </div>
            <div class="row">
                
                
                <div class="mb-3 col-lg-6">
                    <label for="Email" class="form-label">Email:</label>
                    <input type="email" name="emailaddress" class="form-control" placeholder="Please enter your email">

                    

                </div>
                <div class="mb-3 col-lg-6">
                    <label for="" class="form label">what's your gender:</label>
                    <select class="form-control" name="gender">
                        <option value="">--select your gender--</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>

                </div>
                
            </div>
            <p>In order to complette your registration to the bootcamp, you are required to selsct one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.</p>
            <br>
            <div class="row">
                <div class="mb-3 col-lg-12">
                    <label for="" class="form label">what's your preffered course:</label>
                    <select class="form-control" name="course">
                        <option value="">--select your preffered course--</option>
                        <option value="Software Development">Software Development</option>
                        <option value="Cyber Security">Cyber Security</option>
                        <option value="Robotics">Robotics</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Data Science">Data Science</option>
                    </select>

                </div>
            </div>
            <p>You agree to providing your infomation you understand all our data privacy andprotection policy<br>outlined in our Terms & Conditions and the Privacy Policy Statements.</p>
            
            <input type="checkbox">
            <br>
            <label for="">Agree to term and conditions</label>
            <br>
            <br>
            <button type="submit" name="submitbutton" class="btn btn-primary">Submit application</button>
            <br>
           
        </form>
        <br>
        <form action="registernow.php">
            <div class="row">
                <p>Suscribe to get information, latest news about Zalego Academy</p>
                <br>
                <div class="col-lg-9">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="your email address">
                </div>
                <div class="col-lg-3">
                    <label for="btn" class="form-label">Click it Now!</label>
                    <br>
                    <button type="submit" name="submitfutton" class="btn btn-primary">Subscribe</button>
                </div>
            </div>                
        </form> 
        <br>
        <hr>
        <br>
        <footer>
            &copy; Company 2022
        </footer>
           
    </div>   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- < script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b3c74f86fe.js" crossorigin="anonymous"></script>
</body>
</html>