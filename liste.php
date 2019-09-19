
<?php 
require"connexionn.php";

?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<link rel="stylesheet" href="styl.css">
<body >
	<div >
	<div >
		<div >
			<h1 ><strong>Systeme <br>d'inscription <br> en ligne <br> </strong>EMPLOYE</h1>
		<?php
			$sql="select * from mane";
					$resultat=$conn->query($sql);
					?>
          <table>

					
				
					<tr>
						<td>Matricule</td>
						<td>Nom</td>
						<td>Prenom</td>
						<td>Date Naissance</td>
						<td>Email</td>
						<td>Adresse</td>
						<td>telephone</td>
						<td>salaire</td>
						<td colspan=2>Actions</td>
					</tr>"
<?php
					while ($nam=mysqli_fetch_array($resultat)) {
						echo"<tr>
						<td>$nam[mat_emp]</td>
						<td>$nam[nom_emp]</td>
						<td>$nam[prenom_emp]</td>
						<td>$nam[date_nais_emp]</td>
						<td>$nam[email_emp]</td>
						<td>$nam[adresse_emp]</td>
                        <td>$nam[tel_emp]</td>
                        <td>$nam[salaire_emp]</td>
						
					
						<td><a href='delete.php?id_emp=$nam[id_emp]'>supprimer-</a></td>
						<td><a href='update.php?id_emp=$nam[id_emp]'>Modifier</a></td>
						</td>
						</tr>";
					}
					echo"</table>";

				?>
				</table>
		</div>
	</div>
</div>	
echo"<a href='index.php'><button class = 'btn btn-inverse btn-lg'>Ajoutez Employe</button></a><br>";
echo"<br><table class='table table-bordered table-hover' style='color : maroon;'>
</body>
</html>