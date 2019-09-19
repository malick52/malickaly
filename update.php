<?php 
require"connexionn.php";

?>
<?php

$sql="select * from mane WHERE nom_emp= '$_POST[nom_emp]'";
$resultat=$conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
   
</head>

<body >
	<div >
	<div>
		<div >
			<h1 ><strong>Systeme <br>d'inscription <br> en ligne <br> </strong>EMPLOYE</h1>
		</div>

		<div >
			
<div >
				<?php while ($man=mysqli_fetch_array($resultat)) {?>

				<h1>MODIFIER EMPLOYE</h1>
				matricule:<br><input type ="text"  name="mat"  placeholder="merci d'entrer votre matricule"><br>		
		Nom:<br><input type ="text"  name="nom"  placeholder="merci d'entrer votre nom"><br>
		Prenom<br><input type ="text"  name="prenom"  placeholder="merci d'entrer votre prenom"><br>
		date de naissance<br><input type ="date"  name="date"  placeholder="merci de mettre votre adresse"><br>
    email<br><input type ="text"  name="email"  placeholder="merci de mettre votre adresse"><br>
    adresse<br><input type ="text"  name="adresse"  placeholder="merci de mettre votre adresse"><br>
    telephone<br><input type ="text" name="tel"  placeholder="merci de mettre votre adresse"><br>
    salaire<br><input type ="text" name="salaire"  placeholder="merci de mettre votre adresse"><br>
		
						

	
		<input class="btn" type="submit" name="forminscription" value="save">

				   <?php } ?>

			</div>
		</div>
	</div>
</div>	
		
</body>
</html>