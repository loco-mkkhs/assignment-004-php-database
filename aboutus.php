<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn= mysqli_connect($server,$username,$password,$database);

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

<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title> Bootstrap-Gridlayout</title>
        <link rel="stylesheet" href="registernow.php">
        <link rel="stylesheet" href="index.php">
        
    </head>
    <body>
               <!-- navigation bar here -->
       <?php include('navbar.php')?>
    <!-- End navigation bar here -->

        <main class="p-5 mb-4 bg-grey shadow">
            <h1>About Us</h1>                
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea, quod laboriosam quidem placeat assumenda! Aperiam tempora, exercitationem nulla provident corporis minus distinctio! Tempore beatae totam commodi nostrum a praesentium!</p>
        </main>   
        <div class="container">        
            <div class="row">
                <div class="mb-4 col-lg-6">
                    <h1>Our programs</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed excepturi suscipit dicta voluptatibus laborum doloremque asperiores pariatur reprehenderit, molestias, sint eligendi non quae, doloribus eius aperiam dolorum odit optio. Numquam.</p>
                </div>
                <div class=" col-lg-6 ">
                    <img src="images/austin-schmid-1xnjF1fYm9A-unsplash.jpg" class="rounded" alt="picture">                
                </div>

            </div>
            <h1 class="pb-5 pt-5">The programs</h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem 18px;">
                        <div class="card-body p-5">
                            <h2 class="card-title">Skill Discovery</h2>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quae, officiis sit ipsum modi minus nesciunt voluptate itaque. Cumque, autem.</p>
                            <a href="#" class="btn btn-primary">view Details</a>
        
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem 18px;">
                        <div class="card-body p-5">
                            <h2 class="card-title">Upskilling Program</h2>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quae, officiis sit ipsum modi minus nesciunt voluptate itaque. Cumque, autem.</p>
                            <a href="#" class="btn btn-primary">view Details</a>
        
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem 18px;">
                        <div class="card-body p-5">
                            <h2 class="card-title">path finding program</h2>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi quae, officiis sit ipsum modi minus nesciunt voluptate itaque. Cumque, autem.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
        
                        </div>
                    
                    </div>
                </div>
                
                
            </div>
            <br>
            <form action="index.php" method="POST">
                <div class="row">
                    <p>Suscribe to get information, latest naws about Zalego Academy</p>
                    <br>
                    <div class="col-lg-9">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="your email address">
                    </div>
                    <div class="col-lg-3">
                        <label for="btn">Click it Now!</label>
                        <br>
                        <button type="submit" name="submitButton" class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </form>
            <hr>
            <br>
            <footer>
                &copy; Company 2022
            </footer>
            

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
        <!-- < script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
        <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
        







    </body>
</html>