
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
   <link rel="stylesheet" href="style/bootstrap.min.css">
</head>

<body>
	<form method="POST" action="inscription.php">
		<div >
			<h1 ><strong>Systeme <br>d'inscription <br> en ligne <br> </strong>Employe</h1>
		</div>

<div>
		

				<h1>INSERER EMPLOYE</h1>
				<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
		matricule:<br><input type ="text"  class="form-control" name="mat"  placeholder="merci d'entrer votre matricule">
		</div>

		<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
		Nom:<br><input type ="text"  name="nom"  placeholder="merci d'entrer votre nom">
		</div>

		<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
		Prenom<br><input type ="text"  name="prenom"  placeholder="merci d'entrer votre prenom">
		</div>

		<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
		date de naissance<br><input type ="date"  name="date"  placeholder="merci de mettre votre adresse">
		</div>

		<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
    email<br><input type ="text"  name="email"  placeholder="merci de mettre votre adresse">
	</div>

	<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
    adresse<br><input type ="text"  name="adresse"  placeholder="merci de mettre votre adresse">
	</div>

	<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
    telephone<br><input type ="text" name="tel"  placeholder="merci de mettre votre adresse">
	</div>

	<div class="container col-md-6 col-md-offset-3">
				<label for="" class="form control-label"></label>
    salaire<br><input type ="text" name="salaire"  placeholder="merci de mettre votre adresse">
	</div>
		
						

	
		<input class="btn" type="submit" name="forminscription" value="save">
    </div>
	</form>

		

</body>
</html>
