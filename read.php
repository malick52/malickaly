<?php 
require"connexionn.php";
$sql="select * from man WHERE id_emp=$_GET[id_emp]";
$resultat=$connexion->query($sql);


echo"<table>";
while ($man=mysqli_fetch_array($resultat)) {
	echo"<tr><td>mat_emp</td><td>$$man[mat_emp]</td></tr>
		<tr><td>nom_emp</td><td>$$man[nom_emp]</td></tr>
		<tr><td>prenom_emp</td><td>$$man[prenom_emp]</td></tr>
		<tr><td>date_nais_emp</td><td>$$man[date_nais_emp]</td></tr>
		<tr><td>email_emp</td><td>$$man[email_emp]</td></tr>
		<tr><td>adresse_emp</td><td>$$man[adresse_emp]</td></tr>
		<tr><td>tel_emp</td><td>$$man[tel_emp]</td></tr>
		<tr><td>adresse_emp</td><td>$$man[adresse_emp]</td></tr>
		";
	 
}
echo"</table>";
?>