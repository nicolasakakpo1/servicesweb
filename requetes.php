
<!-- Les requetes -->
<?php 

	function afficherClt()
		{
			if (require("connection.php"))
			{ 
				$req = $acces->prepare("SELECT * FROM client ORDER BY idClt DESC");
				$req->execute();
				$data = $req->fetchAll(PDO::FETCH_OBJ);
				return $data;
				$req->closeCursor(); 
			}
		}
    
        function afficherService()
		{
			if (require("connection.php"))
			{ 
				$req = $acces->prepare("SELECT * FROM `service` ORDER BY idService DESC");
				$req->execute();
				$data = $req->fetchAll(PDO::FETCH_OBJ);
				return $data;
				$req->closeCursor(); 
			}
		}

		function afficherMembre()
		{
			if (require("connection.php"))
			{ 
				$req = $acces->prepare("SELECT * FROM `membre` ORDER BY idMembre DESC");
				$req->execute();
				$data = $req->fetchAll(PDO::FETCH_OBJ);
				return $data;
				$req->closeCursor(); 
			}
		}

		function afficherNews()
		{
			if (require("connection.php"))
			{ 
				$req = $acces->prepare("SELECT * FROM `news` ORDER BY idNews DESC");
				$req->execute();
				$data = $req->fetchAll(PDO::FETCH_OBJ);
				return $data;
				$req->closeCursor(); 
			}
		}

		function email()
		{
			if (require("connection.php"))
			{ 
				$req = $acces->prepare("SELECT mail FROM `membre` ORDER BY idMembre DESC");
				$req->execute();
				$data = $req->fetchAll(PDO::FETCH_OBJ);
				return $data;
				$req->closeCursor(); 
			}
		}

	function getServ($id)
		{
			if (require("connection.php")) 
			{

				$req = $acces->prepare("SELECT * FROM produit WHERE id=? limit 1");
					$req->execute(array($id)); 
					
				if ($req->rowCount() == 1)
					{
						$data=$req->fetchAll(PDO::FETCH_OBJ);
						return $data;
					}
				else {
						return false;
						}	
					$req->closeCursor();		
			}
			
		}

		// function getMembre($idMembre)
		// {
		// 	if (require("connection.php")) 
		// 		{
		// 			$req = $acces->prepare("DELETE FROM `membre` WHERE idMembre=? limit 1");
		// 				$req->execute(); 
		// 				$req->closeCursor();
		// 		}
		// }

		function getMember($idMembre)
		{
			if (require("connection.php")) 
			{

				$req = $acces->prepare("SELECT * FROM membre WHERE idMembre=? limit 1");
					$req->execute(array($idMembre)); 
					
				if ($req->rowCount() == 1)
					{
						$data=$req->fetchAll(PDO::FETCH_OBJ);
						return $data;
					}
				else {
						return false;
						}	
					$req->closeCursor();		
			}
			
		}


		function getServices($idService)
		{
			if (require("connection.php")) 
			{

				$req = $acces->prepare("SELECT * FROM service WHERE idService=? limit 1");
					$req->execute(array($idService)); 
					
				if ($req->rowCount() == 1)
					{
						$data=$req->fetchAll(PDO::FETCH_OBJ);
						return $data;
					}
				else {
						return false;
						}	
					$req->closeCursor();		
			}
			
		}

		function getAnnonce($idNews)
		{
			if (require("connection.php")) 
			{

				$req = $acces->prepare("SELECT * FROM news WHERE idNews=? limit 1");
					$req->execute(array($idNews)); 
					
				if ($req->rowCount() == 1)
					{
						$data=$req->fetchAll(PDO::FETCH_OBJ);
						return $data;
					}
				else {
						return false;
						}	
					$req->closeCursor();		
			}
			
		}
?>

