

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StarLab</title>

        <!-- <title>NemaTechGroup</title> -->
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/log.png" rel="icon">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="icon" href="http://example.com/favicon.png">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper-bundle.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.6.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<?php 
   include("headerService.php"); 
 ?>
        <!-- ======= Services Section ======= -->
<?php
	require ("requetes.php");
	$service=afficherService();
?>
          
        <section id="services" class="services">
        <div class="container">
        <br><br>
            <div class="row">
            <?php foreach($service as $service): ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 20px;">
                <div class="icon-box">
                <div class="icon"><i class='bx bxs-user'></i></i></div>
                <h4><a><?= substr($service->nomService,0,100) ?></a></h4>
                <p><?= substr($service->descriptionService,0, 500) ?></p>
                </div> 
            </div>
            <?php endforeach; ?>
            </div>
            </div>  
        </section> 
          
        <!-- End Services Section -->

        
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/glightbox.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/purecounter.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>