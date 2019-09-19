
<?php 
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'connexionn.php';

	//extract($_POST);
	if(isset($_POST['forminscription'])){
	$Mat=$_POST['mat'];
	$Nom=$_POST['nom'];
	$Prenom=$_POST['prenom'];
	$Date=$_POST['date'];
	$Email=$_POST['email'];
	$Adresse=$_POST['adresse'];
	$Tel=$_POST['tel'];
	$Salaire=$_POST['salaire'];
	
	$req="INSERT INTO mane	values(NULL,'$Mat','$Nom','$Prenom','$Date','$Email','$Adresse','$Tel','$Salaire')";
		 $res=$conn->query($req);
		var_dump($res=$conn->query($req));
}
	?>
	<html>
	<header>
	
	</head>
	<body>
	<form>
	<div align="center"><h3> l'empploye sous </h3>
	<table align="center">
	<tr>
	     <td align="right">Mat</td>
		 <td><?php echo ($Mat)?><td>
	</tr>
	<tr>
	     <td align="right">NOM</td>
		 <td><?php echo ($Nom)?><td>
	</tr>
	<tr>
	     <td align="right">PRENOM</td>
		 <td><?php echo ($Prenom)?><td>
	</tr>
	<tr>
	     <td align="right">DATE</td>
		 <td><?php echo ($Date)?><td>
	</tr>
	<tr>
	     <td align="right">EMAIL</td>
		 <td><?php echo ($Email)?><td>
	</tr>
	<tr>
	     <td align="right">ADRESSE</td>
		 <td><?php echo ($Adresse)?><td>
	</tr>
	<tr>
	     <td align="right">TELEPHONE</td>
		 <td><?php echo ($Tel)?><td>
	</tr>
	<tr>
	     <td align="right">SALAIRE</td>
		 <td><?php echo ($Salaire)?><td>
	</tr>

	</table>
	<p> est enregistrer</p>
	<p><a href="index.php">ajouter un nouveau </a></p>
	<p><a href="liste.php">la liste des employes </a></p>
</form>
</body>
</html>