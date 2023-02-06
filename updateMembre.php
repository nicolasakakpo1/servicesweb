<?php 
	require("connection.php");
	session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}
?>

<?php 

if(!isset($_GET['idMembre'])){
    header("location:membreAdmin.php");
}
    if(empty($_GET['idMembre']) AND !is_numeric($_GET['idMembre'])){
        header("location:membreAdmin.php");
    }

    $idMembre=$_GET['idMembre'];
if (require("requetes.php")){
    $membre=getMember($idMembre);	
}

foreach($membre as $membre){
    $idMembre = $membre->idMembre;
    $nomMembre = $membre->nomMembre;
    $prenomMembre = $membre->prenomMembre;
    $imageMembre = $membre->imageMembre;
    $mailMembre = $membre->mailMembre;
    $contactMembre = $membre->contactMembre;
    $adresseMembre = $membre->adresseMembre;
    $specialiteMembre = $membre->specialiteMembre;
}

require("connection.php");
  if(isset($_POST['valider'])) 
      { 

          if (!empty($_POST['nomMembre']) and !empty($_POST['prenomMembre']) and !empty($_POST['imageMembre']) and !empty($_POST['mailMembre']) and !empty($_POST['contactMembre']) and !empty($_POST['adresseMembre']) and !empty($_POST['specialiteMembre'])) 
              {
                  $req = $acces->prepare("UPDATE `membre` SET `idMembre`=:idMembre, `nomMembre`=:nomMembre, `prenomMembre`=:prenomMembre, `imageMembre`=:imageMembre, `mailMembre`=:mailMembre, `contactMembre`=:contactMembre, `adresseMembre`=:adresseMembre, `specialiteMembre`=:specialiteMembre WHERE `idMembre`=:idMembre");

                      $req->bindParam(':idMembre', $idMembre, PDO::PARAM_INT);
                      $req->bindParam(':nomMembre', $_POST['nomMembre'], PDO::PARAM_STR);
                      $req->bindParam(':prenomMembre', $_POST['prenomMembre'], PDO::PARAM_STR);
                      $req->bindParam(':imageMembre', $_POST['imageMembre'], PDO::PARAM_STR);
                      $req->bindParam(':mailMembre', $_POST['mailMembre'], PDO::PARAM_STR);
                      $req->bindParam(':contactMembre', $_POST['contactMembre'], PDO::PARAM_INT);
                      $req->bindParam(':adresseMembre', $_POST['adresseMembre'], PDO::PARAM_STR);
                      $req->bindParam(':specialiteMembre', $_POST['specialiteMembre'], PDO::PARAM_STR);
                      $req->execute();
                      $req->closeCursor();
                      header("location:membreAdmin.php");
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
  <form action="" method="post" role="form" class="php-email-form">
    <div class="card-header"><h5><strong>Modification des informations des membres</strong></h5></div>
    <div class="row">
      <div class="col-md-6 form-group"><br>
        <input type="text" name="nomMembre" value="<?= $nomMembre ?>" class="form-control" id="" placeholder="Nom du membre" required autofocus>
      </div>
      <div class="col-md-6 form-group mt-3 mt-md-0"><br>
        <input type="text" class="form-control" name="prenomMembre" value="<?= $prenomMembre ?>" id="" placeholder="Prénom du membre" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="file" class="form-control" name="imageMembre" value="<?= $imageMembre ?>" id="" placeholder="Choisir de l'image du membre" required>
    </div><br>
    <div class="row">
      <div class="col-md-6 form-group">
        <input type="email" name="mailMembre" value="<?= $mailMembre ?>" class="form-control" id="" placeholder="Email du membre" required>
      </div>
      <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="number" class="form-control" name="contactMembre" value="<?= $contactMembre ?>" id="" placeholder="Contacts du membre" required>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="adresseMembre" value="<?= $adresseMembre ?>" id="" placeholder="Adresse du membre" required>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="specialiteMembre" value="<?= $specialiteMembre ?>" id="" placeholder="Spécialité du membre" required>
    </div><br>
    <!-- <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
    </div> -->
    <!-- <div class="my-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Votre message a été envoyé. Merci!</div>
    </div> -->
    <div class="text-center">
      <button type="submit" style="background-color: blue;"><a href="membreAdmin.php" style="color: white;">Annuler</a></button>
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