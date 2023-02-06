
<?php 
	require("connection.php");
	session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}

    @$idClt=$_GET["idClt"];
    @$supp=$_GET["supp"];
    if($supp=="oui"){
      $req = $acces->prepare("DELETE FROM `client` WHERE idClt=? limit 1");
						$req->execute(array($idClt));  
    }
?>

<!doctype html>
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

  <?php
    require ("requetes.php");
    $client=afficherClt();
      $nbre=count($client);
  ?>
  <body>
    <br><br><br><?php echo "<h4 class='card-header' style='color:blue;position:fixed; border-radius:50%;'>$nbre</h4>" ?><br>
    <main role="main">
            <div class="container" style="margin-left: 150px;">
            <?php foreach($client as $client): ?>
                <div class="row justify-content-between">
                    <div class="col-6">
                    <h4 class="jumbotron-heading" style="font-family: 'Times New Roman', Times, serif;"><box-icon name='user-circle' animation='tada' color='#0f18ec' ></box-icon> <strong><?= substr($client->nomClt,0,20) ?></strong></h4><h4 style="font-family: 'Times New Roman', Times, serif;"><box-icon name='user-voice' animation='tada' color='#0b0bf5' ></box-icon> <strong style="font-size: 20px;"><?= substr($client->numeroClt,0,35) ?></strong></h4>
                        <h4 style="font-family: 'Times New Roman', Times, serif;"><box-icon name='home-alt-2' animation='tada' color='#0d16dc' ></box-icon> <strong style="color: black;font-size:23px;"><?= substr($client->adresseClt,0,50) ?></strong></h4>
                        <p class="lead text-muted" style="font-family: 'Times New Roman', Times, serif;width:65rem; text-align:justify;"><box-icon name='message-dots' type='solid' animation='tada' color='#0b0bf5' ></box-icon> <strong><?= substr($client->message,0,500) ?></strong></p>
                    </div>
                    <div class="col-6">
                        <h4 style="font-family: 'Times New Roman', Times, serif;"><box-icon name='user' animation='tada' color='#0f18ec' ></box-icon> <?= substr($client->prenomClt,0,35) ?></h4>
                        <h4 style="font-family: 'Times New Roman', Times, serif;color: black;"><box-icon name='gmail' type='logo' animation='tada' color='#0b0bf5' ></box-icon> <strong style=" color:blue;"><?= substr($client->mailClt,0,30) ?></strong></h4>
                        <h4 style="font-family: 'Times New Roman';"><box-icon name='calendar' animation='tada' color='rgba(30,13,236,0.96)' ></box-icon> <?= substr($client->dateDemande,0,20) ?></h4>          
                    </div>
                    <div class="form-group row mb-0">
                            <div class="" style="text-align:center;">    
                                  <button type="submit" class="btn btn-primary" name="" style="background-color:green;border:none;">
                                    <a href="https://api.whatsapp.com/send?phone=<?= substr($client->numeroClt,0,20) ?>"><box-icon type='logo' name='whatsapp'></box-icon></a>
                                  </button>  
                                  <button type="submit" class="btn btn-primary" name="supprimer" style="background-color:red;border:none;">
                                  <a href="?idClt=<?=$client->idClt?>&supp=oui" style="color:white;" onClick="return confirm('Voulez-vous continuer?')"><box-icon name='message-x'></box-icon></a>
                                  </button>                
                            </div>
                    </div>
                </div><br><br>
            <?php endforeach; ?>
            </div>

    </main>

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
</html>