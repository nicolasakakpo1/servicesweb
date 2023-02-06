

<?php
	require("connection.php");
    session_start();

	if(isset($_POST['login'])) 
		{ 
			$req = $acces->prepare("SELECT * FROM admin WHERE email=:email AND motdepasse=:motdepasse AND code=:code limit 1");
					$req->bindValue(':email', $_POST['email']);
					$req->bindValue(':motdepasse', $_POST['motdepasse']);
                    $req->bindValue(':code', $_POST['code']);
					$req->execute(); 
					$data=$req->fetchAll();
				if (count($data) == 1)
					{
					    $_SESSION["autoriser"] = "oui";
						header("location:demandeClient");
					}
				else {
					header("location:login");
				}	
					$req->closeCursor();		
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
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/bootstrap-icons.css" rel="stylesheet">
  <link href="css/boxicons.min.css" rel="stylesheet">
  <link href="css/glightbox.min.css" rel="stylesheet">
  <link href="css/swiper-bundle.min.css" rel="stylesheet">

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
 include("headerLogin.php");
?>

    <body>
      <br><br><b></br><br><br><br>
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-header"><h4><strong>Login</strong></h4></div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="form-group row">
                                  <br>  
                                    <label for="email" class="col-sm-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6"><br>
                                        <input id="" type="email" class="form-control" name="email" value="" placeholder="Email" required autofocus>
                                            <span class="invalid-feedback">
                                                <strong></strong>
                                            </span>                                     
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input id="" type="password" class="form-control" name="motdepasse" placeholder="Mot de passe" required>
                                        <!-- <box-icon name='face' onClick="changer()"></box-icon> -->
                                            <span class="invalid-feedback">
                                                <strong></strong>
                                            </span>                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="code" class="col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input id="" type="password" class="form-control" name="code" placeholder="Code de confirmation" required>
                                            <span class="invalid-feedback">
                                                <strong></strong>
                                            </span>                                       
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">   
                                        <button type="submit" class="btn btn-primary" style="background-color: red;border:none; padding:7px"><a href="" style="color: white;">Annuler</a></button>  
                                        <button type="submit" class="btn btn-primary" name="login">
                                            Login
                                        </button>                 
                                    </div>
                                </div>
                            </form>
                      </div>
                    </div>
                </div>
            </div>
          </div>


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