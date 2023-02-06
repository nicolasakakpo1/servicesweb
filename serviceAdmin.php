
<?php 
	require("connection.php");
	session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}

    @$idService=$_GET["idService"];
    @$supp=$_GET["supp"];
    if($supp=="oui"){
      $req = $acces->prepare("DELETE FROM `service` WHERE idService=? limit 1");
      $req->execute(array($idService));  
    }
?>

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
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


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

  <!-- =======================================================
  * Template Name: Eterna - v4.6.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<?php 
		include("headerAdmin.php");
?>
          
         <!-- ======= Services Section ======= -->
<?php
		require ("requetes.php");
		$service=afficherService();
    $nbre=count($service);
?>  
<body>
<br><br><br><?php echo "<h4 class='card-header' style='color:blue;position:fixed; border-radius:50%;'>$nbre</h4>" ?><br> 
        <section id="services" class="services"> 
        <div class="container">
            <div class="row">
            <?php foreach($service as $service): ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin-bottom: 20px;">
                <div class="icon-box">
                <div class="icon"><i class='bx bxs-user'></i></div>
                <h4><a><?= substr($service->nomService,0,100) ?></a></h4>
                <p><?= substr($service->descriptionService,0, 500) ?></p><br><br>
                <div class="form-group row mb-0">
                         <div class=""> 
                            <button type="submit" class="btn btn-primary" name="supprimer" style="background-color:blue;border:none;">
                              <a href="updateService.php?idService=<?= $service->idService ?>" style="color:white;"><box-icon name='sync' color='rgba(8,8,8,0.96)' ></box-icon></a>
                              </button>    
                              <button type="submit" class="btn btn-primary" name="" style="background-color:red;border:none;">
                                <a href="?idService=<?=$service->idService?>&supp=oui" style="color:white;" onClick="return confirm('Voulez-vous continuer?')"><box-icon name='message-x'></box-icon></a>
                              </button>                 
                         </div>
                </div>
              </div> 
            </div> 
            <?php endforeach; ?>
            </div> 
            </div>  
        </section>    
        <!-- End Services Section -->


<!-- Vendor JS Files -->
<script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/glightbox.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/validate.js"></script>
  <script src="js/purecounter.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>