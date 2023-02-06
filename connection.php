
		<?php 
			// connexion a la base de donnees
			
			try {
				$acces=new PDO("mysql:host=localhost;dbname=techs;charset=utf8","root", "");
				$acces->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
			} catch (PDOException $e) {
				
			}
		?>