
<?php 
	require("connection.php");
	session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}
?>

<?php

    if(!isset($_GET['idNews'])){
        header("location:newsAdmin.php");
    }
        if(empty($_GET['idNews']) AND !is_numeric($_GET['idNews'])){
            header("location:newsAdmin.php");
        }

    $idNews=$_GET['idNews'];
    if (require("requetes.php")){
        $news=getAnnonce($idNews);	
    }

    foreach($news as $news){
        $idNews = $news->idNews;
        $titreNews = $news->titreNews;
        $annonceNews = $news->annonce;
        $imageNews = $news->imageNews;
    }     

  require("connection.php");
	if(isset($_POST['valider'])) 
		{ 

			if (!empty($_POST['titreNews']) and !empty($_POST['imageNews']) and !empty($_POST['annonceNews'])) 
				{
					$req = $acces->prepare("UPDATE `news` SET `idNews`=:idNews, `titreNews`=:titreNews, `imageNews`=:imageNews, `annonce`=:annonceNews WHERE `idNews`=:idNews");
						$req->bindParam(':idNews', $idNews, PDO::PARAM_INT);
            $req->bindParam(':titreNews', $_POST['titreNews'], PDO::PARAM_STR);
						$req->bindParam(':imageNews', $_POST['imageNews'], PDO::PARAM_STR);
            $req->bindParam(':annonceNews', $_POST['annonceNews'], PDO::PARAM_STR);
						$req->execute();
						$req->closeCursor();
            header("location:newsAdmin.php");
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

<body>
  
<?php 
		include("headerAdmin.php");
?>

<main id="">

<!-- ======= Breadcrumbs ======= -->
<br><br><br>

<!-- ======= Contact Section ======= -->
<section id="" class="contact">
<div class="container">

<div class="row">

  <div class="col-lg-12">
    <form action="" method="post" role="form" class="php-email-form">
        <div class="card-header"><h5><strong>Modification des annonces</strong></h5></div><br>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="titreNews" value="<?= $titreNews ?>" class="form-control" id="" placeholder="Titre de l'annonce" required autofocus>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="file" class="form-control" value="<?= $imageNews ?>" name="imageNews" id="" placeholder="Choisir l'image" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" name="annonceNews" value="<?= $annonceNews ?>" class="form-control" id="" placeholder="Annonces" required>
          </div><br>
          <!-- <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Enregistrement effectué. Merci!</div>
          </div> -->
          <div class="text-center">
            <button type="submit" style="background-color: blue;"><a href="newsAdmin.php" style="color: white;">Annuler</a></button>
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
  