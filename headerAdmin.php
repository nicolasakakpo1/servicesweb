
<?php 
	require("connection.php");
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
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



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.6.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1><a href="index.html">Eterna</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="images/log.png"  alt="" class="img-fluid"></a>
        <!-- <object type="image/svg+xml" data="https://www.nematechgroup.com/img/logo.svg" width="200" height="200">

        </object> -->
      </div>
        
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="ajoutMembre"> Ajout de membres</a></li>
          <li><a class="" href="membreAdmin">Membres</a></li>
          <li><a class="" href="ajoutService">Ajout de services</a></li>
          <li><a class="" href="serviceAdmin">Services</a></li>
          <li><a class="" href="demandeClient">Demandes</a></li>
          <li><a class="" href="ajoutNews">Ajout de news</a></li>
          <li><a class="" href="newsAdmin">News</a></li>
          <!-- <li><a class="" href="/portfolio">Portfolio</a></li> -->
          <!-- <li><a class="" href="/equipe">Equipe</a></li> -->
          <li><a class="" href="#"></a></li>
          <li><a class="" href="logout.php" style="color: red;"><strong>Log out</strong></a></li>
        </ul>
      </nav><!-- .navbar -->

        
</div>

    </div>
  </header><!-- End Header -->