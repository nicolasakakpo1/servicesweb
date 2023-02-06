
<?php 
	require("connection.php");
	session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}
?>

<?php 

    if(!isset($_GET['idService'])){
        header("location:serviceAdmin.php");
    }
        if(empty($_GET['idService']) AND !is_numeric($_GET['idService'])){
            header("location:serviceAdmin.php");
        }

    $idService=$_GET['idService'];
	if (require("requetes.php")){
		$service=getServices($idService);	
	}

    foreach($service as $service){
        $idService = $service->idService;
        $nomService = $service->nomService;
        $descriptionService = $service->descriptionService;
        } 

require("connection.php");

  if(isset($_POST['valider'])) 
      { 

          if (!empty($_POST['nomService']) and !empty($_POST['descriptionService'])) 
              {
                  $req = $acces->prepare("UPDATE `service` SET `idService`=:idService, `nomService`=:nomService, `descriptionService`=:descriptionService WHERE `idService`=:idService");

                      $req->bindParam(':idService', $idService, PDO::PARAM_INT);
                      $req->bindParam(':nomService', $_POST['nomService'], PDO::PARAM_STR);
                      $req->bindParam(':descriptionService', $_POST['descriptionService'], PDO::PARAM_STR);
                      $req->execute(); 
                      $req->closeCursor();
                      header("location:serviceAdmin.php");
              }
          else{
                  //echo "Veuillez compléter tous les champs s'il vous plait";
              }
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

<?php 
  include("headerAdmin.php");
?>

<body>
<main id="">

<!-- ======= Breadcrumbs ======= -->
<br><br><br>

<!-- ======= Contact Section ======= -->
<section id="" class="contact">
<div class="container">

<div class="row">

      <div class="col-lg-12">
        <form action="" name="" role="form" method="post" class="php-email-form">
          <!-- <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="descriptionService" value="" id="" placeholder="Email" required>
            </div>
          </div> -->
          <div class="card-header"><h5><strong>Modification des services</strong></h5></div>
          <div class="form-group mt-3">
            <input type="text" value="<?= $nomService ?>" class="form-control" name="nomService" id="" placeholder="Nom du service" required autofocus>
          </div>
          <div class="form-group mt-3">
              <input type="text" class="form-control" name="descriptionService" value="<?= $descriptionService ?>" id="" placeholder="Description du service" required>
          </div>
          <br>
          <div class="text-center">
            <button type="submit" style="background-color: blue;"><a href="serviceAdmin.php" style="color: white;">Annuler</a></button>
            <button type="submit" name="valider">Enregistrer</button>
          </div>
        </form>
      </div>
  </div>
</div>
</section><!-- End Contact Section -->
</main><!-- End #main -->

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