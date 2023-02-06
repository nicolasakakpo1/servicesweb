
<?php 

require("connection.php");
if(isset($_POST['valider'])) 
  { 

    if (!empty($_POST['nomClt']) and !empty($_POST['prenomClt']) and !empty($_POST['numeroClt']) and !empty($_POST['mailClt']) and !empty($_POST['adresseClt']) and !empty($_POST['dateDemande']) and !empty($_POST['message'])) 
      {
        $req = $acces->prepare("INSERT INTO `client`(`nomClt`, `prenomClt`, `numeroClt`, `mailClt`, `adresseClt`, `dateDemande`, `message`) VALUES(:nomClt, :prenomClt, :numeroClt, :mailClt, :adresseClt, :dateDemande, :message)");

          $req->bindParam(':nomClt', $_POST['nomClt'], PDO::PARAM_STR);
          $req->bindParam(':prenomClt', $_POST['prenomClt'], PDO::PARAM_STR);
          $req->bindParam(':numeroClt', $_POST['numeroClt'], PDO::PARAM_INT);
          $req->bindParam(':mailClt', $_POST['mailClt'], PDO::PARAM_STR);
          $req->bindParam(':adresseClt', $_POST['adresseClt'], PDO::PARAM_STR);
          $req->bindParam(':dateDemande', $_POST['dateDemande'], PDO::PARAM_STR);
          $req->bindParam(':message', $_POST['message'], PDO::PARAM_STR);
          $req->execute();
          $req->closeCursor();
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
  include("headerDemande.php");
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
    <div class="card-header"><h5><strong>Veuillez nous laisser votre message. Merci !</strong></h5></div><br>
    <div class="row">
      <div class="col-md-6 form-group">
        <input type="text" name="nomClt" class="form-control" id="" placeholder="Entrez votre nom" required autofocus>
      </div>
      <div class="col-md-6 form-group mt-3 mt-md-0">
        <input type="text" class="form-control" name="prenomClt" id="" placeholder="Entrez votre prénom" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group mt-3 mt-md-0"><br>
        <input type="number" class="form-control" name="numeroClt" id="" placeholder="Entrez votre contact (code du pays)" required>
      </div>
      <div class="col-md-6 form-group"><br>
        <input type="email" name="mailClt" class="form-control" id="" placeholder="Entrez votre email" require>
      </div>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="adresseClt" id="" placeholder="Entrez votre adresse" required>
    </div>
    <div class="form-group mt-3">
      <input type="date" class="form-control" name="dateDemande" id="" placeholder="Choisir la date de demande" required>
    </div>
    <div class="form-group mt-3">
      <input type="text" class="form-control" name="message" id="" placeholder="Entrez votre message" required>
    </div><br>
    <div class="text-center">
      <button type="submit" style="background-color: blue;"><a href="" style="color: white;">Annuler</a></button>
      <button type="submit" name="valider">Soumettre</button>
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