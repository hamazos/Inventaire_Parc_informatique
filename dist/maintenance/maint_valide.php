<?php
    session_start();
    include_once('../connection.php');

    if(isset($_POST['valid'])){
		$id = $_POST['id'];
        $ref_cat =$_POST['ref_cat'];;
		$numero_serie = $_POST['numero_serie'];
		$etat = $_POST['etat'];
		$reaffectation = $_POST['reaffectation'];
		$date_retour = $_POST['date_retour'];
		
		switch($ref_cat) {
			case 1:
				$sql = "UPDATE `inventaire` SET `etat`='$etat',`utilisteur`='$reaffectation' WHERE numero_serie = '$numero_serie'";
			break;
			case 2:
				$sql = "UPDATE `bureau` SET `etat`='$etat',`utilisteur`='$reaffectation' WHERE numero_serie = '$numero_serie'";
			break;
			case 3:
				$sql = "UPDATE `photocopie` SET `emplacement`='$reaffectation',`etat`='$etat'WHERE `numero_serie`='$numero_serie'";
			break;
			case 4:
				$sql = "UPDATE `imprimante` SET `emplacement`='$reaffectation',`etat`='$etat'WHERE `numero_serie`='$numero_serie'";
			break;
			case 5:
				$sql = "UPDATE `scanner` SET `emplacement`='$reaffectation',`etat`='$etat'WHERE `numero_serie`='$numero_serie'";
			break;
			case 6:
				$sql = "UPDATE `fax` SET `emplacement`='$reaffectation',`etat`='$etat'WHERE `numero_serie`='$numero_serie'";
			break;
			case 7:
				$sql = "UPDATE `serveur` SET `etat`='$etat',`utilisteur`='$reaffectation' WHERE numero_serie = '$numero_serie'";
			break;
		}
		$sql1= "UPDATE `maintenance` SET `date_retour`='$date_retour' WHERE id = '$id'";

		//var_dump($conn->query($sql)&&$conn->query($sql1));
		//exit;
		//use for MySQLi OOP
		
		if($conn->query($sql)&&$conn->query($sql1)){
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
    header('location: ../entretien.php');
?>