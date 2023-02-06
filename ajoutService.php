
<?php 
	require("connection.php");
	session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}
?>

<?php 

require("connection.php");

if(isset($_POST['valider'])) 
  { 

    if (!empty($_POST['nomService']) and !empty($_POST['descriptionService'])) 
      {
        $req = $acces->prepare("INSERT INTO `service`(`nomService`, `descriptionService`) VALUES(:nomService, :descriptionService)");
          $req->bindParam(':nomService', $_POST['nomService'], PDO::PARAM_STR);
          $req->bindParam(':descriptionService', $_POST['descriptionService'], PDO::PARAM_STR);
          $req->execute(); 
          $req->closeCursor();
      }
    else{
        //echo "Veuillez compléter tous les champs s'il vous plait";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

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
            <div class="card-header"><h5><strong>Ajout de nouveaux services</strong></h5></div>
            <div class="form-group mt-3">
              <div class="form-group mt-3">
                <input type="text" name="nomService" class="form-control" id="" placeholder="Nom du service" required autofocus>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="descriptionService" id="" placeholder="Description du service" required>
              </div>
            </div><br>
            <div class="text-center">
              <button type="submit" style="background-color: blue;"><a href="" style="color: white;">Annuler</a></button>
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
          <!-- <script src="js/validate.js"></script> -->
          <script src="js/purecounter.js"></script>
          <script src="js/swiper-bundle.min.js"></script>
          <script src="js/noframework.waypoints.js"></script>

          <!-- Template Main JS File -->
          <script src="js/main.js"></script>
</body>
</html>
