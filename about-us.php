<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/foods/logo.png" rel="shortcut icon">
    <title>FOOD ORDERING SYSTEM</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">	
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->

    
<!--*********************************************START OF NAVIGATION BAR****************************************-->

<body>
<img src="images/foods/banner.jpg" class="img-responsive wow fadeInDown" width="100%;"/>
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                </div>
				
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="about-us.php">About Us</a></li>
                     
                        <li><a href="available.php">Availables</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                        <li>
                        <a data-toggle="modal" data-target=".bs-example-modal-sm" style="cursor:pointer;">Admin</a>
                           
                               
                        </li>                                  
                    </ul>
                </div>
            </div><!--/.container-->

        </nav><!--/nav-->
        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2>Mission</h2>
                <p class="lead">We are truted fresh food partner and local provider of ready eat food program. This associated order and bussiness information,food consulting, and local controlled logistics. Food Ordering system provide best in class food service enterprise since its founding in 2015.</p>
            </div>
            <div class="center wow fadeInDown">
                <h2>Vision</h2>
                <p class="lead">To be premier company thats meets and eceeds the demands of today's lifestyles by providing ready, convenient, innovative and healthy food products to multi-location requester nationally while adhering to our core values </p>
               
            </div>
            <div class="center wow fadeInDown">
                <h2>Core Values</h2>
                <p class="lead">Christ-centered<br>Passionate for result<br>Enterprenuetal Spirit<br>Committed to the organization<br>Growth oriented</p>
               
            </div>
        
            <div class="center wow fadeInDown">
                <h2>FoodOrderingSystem Profile</h2>
                <p class="lead">FoodOrderingSystem (FOS) Services aim to provide excellent quality service to client ensuring customer satisfaction through a service with value and personalization performed by a highly knowledgeable and experienced professional. My concentration shall and always will be to assist the clients in achieving their dream of a perfect food eating while maintaining my ideas and integrity in the line of customer.</p>
            </div>
        </section>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; 2016 <a target="_blank" href="#" title="#">FoodOrderingSystem</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<?php include('loginModal.php');?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>