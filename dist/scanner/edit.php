<?php
	session_start();
	include_once('../connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$numero_serie = $_POST['numero_serie'];
		$code_inventaire = $_POST['code_inventaire'];
		$designation = $_POST['designation'];
		$marque = $_POST['marque'];
		$model = $_POST['model'];
		$affectation = $_POST['affectation'];
		$etat = $_POST['etat'];
		
		$sql = "UPDATE `scanner` SET `numero_serie`='$numero_serie',`code_inventaire`='$code_inventaire',`designation`='$designation',`marque`='$marque',`model`='$model',`emplacement`='$affectation',`etat`='$etat'WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: ../scanner.php');

?>