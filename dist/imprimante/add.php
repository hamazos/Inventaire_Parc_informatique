<?php
	session_start();
	include_once('../connection.php');

	if(isset($_POST['add'])){
		$numero_serie = $_POST['numero_serie'];
		$code_inventaire = $_POST['code_inventaire'];
		$designation = $_POST['designation'];
		$marque = $_POST['marque'];
		$model = $_POST['model'];
		$affectation = $_POST['affectation'];
		$etat = $_POST['etat'];
		$sql = "INSERT INTO `imprimante`(`numero_serie`, `code_inventaire`, `designation`, `marque`, `model`, `emplacement`, `etat`)
				VALUES ('$numero_serie', '$code_inventaire', '$designation','$marque', '$model', '$affectation', '$etat')";

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

	header('location: ../imprimante.php');
?>