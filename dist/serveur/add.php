<?php
	session_start();
	include_once('../connection.php');

	if(isset($_POST['add'])){
		$numero_serie = $_POST['numero_serie'];
		$code_inventaire = $_POST['code_inventaire'];
		$designation = $_POST['designation'];
		$marque = $_POST['marque'];
		$model = $_POST['model'];
		$caracteristique = $_POST['caracteristique'];
		$etat = $_POST['etat'];
		$utilisateur = $_POST['utilisateur'];
		$systeme = $_POST['systeme'];
		$sql = "INSERT INTO `serveur`(`numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `caracteristique`, `etat`, `utilisteur`, `systeme`)
				VALUES ('$numero_serie', '$code_inventaire', '$designation','$marque', '$model', '$caracteristique', '$etat', '$utilisateur', '$systeme')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ../serveur.php');
?>