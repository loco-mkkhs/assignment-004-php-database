<?php include('process.php') 
include('process-records.php')
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
        <link rel="stylesheet" href="aboutus.php">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
    </head>
    <body>
        <!-- navigation bar here -->
        <?php include('navbar.php')?>
    
        <!-- End navigation bar here -->





        <main class="p-5 mb-4 bg-light ">

            <h1>Welcome, Loco mk</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat ea, quod laboriosam quidem placeat assumenda! Aperiam tempora, exercitationem nulla provident corporis minus distinctio! Tempore beatae totam commodi nostrum a praesentium!</p>
            <button class="btn btn-primary">learn more</button>
        </main>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <h1>Header 1</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus blanditiis magni laboriosam quaerat exercitationem ratione illo, rem odio iusto ea quibusdam molestias placeat dicta perspiciatis voluptatem ad eligendi totam? Voluptatem!</p>
                    <button class="btn btn-primary">Learn more</button>
                </div>

                <div class="col-lg-4">
                    <h1>Header 2</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus blanditiis magni laboriosam quaerat exercitationem ratione illo, rem odio iusto ea quibusdam molestias placeat dicta perspiciatis voluptatem ad eligendi totam? Voluptatem!</p>
                    <button class="btn btn-primary">Learn more</button>
                </div>

                <div class="col-lg-4">
                    <h1>Header 3</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicin. Temporibus blanditiis magni laboriosam quaerat exercitationem ratione illo, rem odio iusto ea quibusdam molestias placeat dicta perspiciatis voluptatem ad eligendi totam? Voluptatem!</p>
                    <button class="btn btn-primary">Learn more</button>
                </div>
            </div> 
        
            
            <!-- contact us page Header -->
                <div class="row pt-5">
                    <h1>contact us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat quos tempora deleniti sed natus! Suscipit hic nobis quis. Magnam expedita nihil harum laborum eligendi dolorum? Nesciunt debitis accusamus rerum, necessitatibus ipsum dolore praesentium pariatur quasi, ad perspiciatis est, aspernatur reprehenderit! Odit nihil blanditiis molestias, optio sint iste nesciunt ducimus tempore!</p>
                    <form action="index.php" method="POST">
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="first Name" class="form label">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Please enter your Name">

                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="Last Name" class="form label">Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Please enter your Name">

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="Phone Number" class="form-label">Phone Number</label>
                                <input type="tel" name="phonenumber" class="form-control" placeholder="Please enter your Phone Number">

                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Please enter your email">

                                

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="message" class="form-label">Your message</label>
                                <textarea cols="30" name="message" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="submitfutton" class="btn btn-primary">send a message</button>

                    </form>


                </div>
            <!-- End contact us page --> 
                  
            <hr>
            <br>
            <footer>
                &copy Company 2022
            </footer>
            

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
        <!-- < script src="bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script> -->
        <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
        







    </body>
</html>