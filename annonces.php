
<?php 
	require("connection.php");
	//session_start();
		if (!empty($_SESSION["autoriser"]!="oui")) {
			header("location:login.php");
		}

        @$idNews=$_GET["idNews"];
        @$supp=$_GET["supp"];
        if($supp=="oui"){
          $req = $acces->prepare("DELETE FROM `news` WHERE idNews=? limit 1");
          $req->execute(array($idNews));  
        }
?>

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
	$news=afficherNews();
    $nbre=count($news);
?>
<body>
<br><br><br><?php echo "<h4 class='card-header' style='color:blue;position:fixed; border-radius:50%;'>$nbre</h4>" ?><br>
<main role="main">
        <div class="container" style="margin-left: 20px;">
        <?php foreach($news as $news): ?>
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="card mb-4 box-shadow" style="width: 400px; margin-top:5px; padding:5px;border-radius: 5%; border:green solid 2px; margin-left:150px">
                        <img class="card-img-top" src="<?= substr($news->imageNews,0,100) ?>" alt="Card image cap" style="height:200px; border-radius: 2%;">
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="jumbotron-heading" style="font-family: 'Times New Roman', Times, serif;"><?= substr($news->titreNews,0,100) ?></h3>
                    <p class="lead text-muted" style="font-family: 'Times New Roman', Times, serif;width: 600px;text-align:justify;"><strong><?= substr($news->annonce,0,500) ?></strong></p>
                    <hr>
                    <div class="form-group row mb-0">
                         <div class="">
                            <button type="submit" class="btn btn-primary" name="modifier"       style="background-color:blue;border:none;">
                                <a href="updateNews.php?idNews=<?= $news->idNews ?>" style="color:white;"><box-icon name='sync' color='rgba(8,8,8,0.96)' ></box-icon></a>
                              </button>    
                              <button type="submit" class="btn btn-primary" name="supprimer" style="background-color:red;border:none;">
                                <a href="?idNews=<?=$news->idNews?>&supp=oui" style="color:white;" onClick="return confirm('Voulez-vous continuer?')"><box-icon name='message-x'></box-icon></a>
                              </button>                 
                         </div>
                </div>
                </div>
            </div><br><br>
        <?php endforeach; ?>
        </div>

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

