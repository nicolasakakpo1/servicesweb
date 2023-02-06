
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>StarLab</title>

    <!-- Bootstrap core CSS -->
    <link href="files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
    <link href="tshirt.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>

<?php
	require ("requetes.php");
	$membre=afficherMembre();
?>
<body>
<br><br><br><br><br>
<main role="main">
        <div class="container" style="margin-left: 50px;">
        <?php foreach($membre as $membre): ?>
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="card mb-4 box-shadow" style="width: 250px; margin-top:-10px; padding:5px;border-radius: 50%; border:green solid 2px; margin-left:270px">
                        <img class="card-img-top" src="<?= substr($membre->imageMembre,0,25) ?>" alt="Card image cap" style="height:250px; border-radius: 50%;">
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="jumbotron-heading" style="font-family: 'Times New Roman', Times, serif;"><?= substr($membre->nomMembre,0,20) ?></h1><h3 style="font-family: 'Times New Roman', Times, serif;"><?= substr($membre->prenomMembre,0,35) ?></h3>
                    <h5 style="color: blue;" style="font-family: 'Times New Roman', Times, serif;"><strong><?= substr($membre->mailMembre,0,25) ?></strong></h5>
                    <h5 style="font-family: 'Times New Roman';"><?= substr($membre->contactMembre,0,20) ?></h5>
                    <h5 style="font-family: 'Times New Roman', Times, serif;"><?= substr($membre->adresseMembre,0,100) ?></h5>
                    <p class="lead text-muted" style="font-family: 'Times New Roman', Times, serif;"><strong><?= substr($membre->specialiteMembre,0,150) ?></strong></p>
                    <hr>
                    <div class="form-group row mb-0">
                         <div class="">    
                              <button type="submit" class="btn btn-primary" name="" style="background-color:green;border:none;">
                                 <a href="https://api.whatsapp.com/send?phone=<?= substr($membre->contactMembre,0,20) ?>"><box-icon type='logo' name='whatsapp'></box-icon></a>
                              </button> 
                              <button type="submit" class="btn btn-primary" name="" style="background-color:blue;border:none;">
                              <a href="https://gmail.googleapis.com:<?= substr($membre->mailMembre,0,25) ?>" ><box-icon type='logo' name='gmail'></box-icon></a>
                              </button>                
                         </div>
                </div>
                </div>
            </div><br><br>
        <?php endforeach; ?>
        </div>
        <!-- https://gmail.googleapis.com -->
</main>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="holder.min.js"></script>
</body>
</html>

