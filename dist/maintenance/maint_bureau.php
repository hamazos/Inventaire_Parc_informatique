<?php
    session_start();
    include_once('../connection.php');

    if(isset($_POST['maint_bur'])){
        $ref_cat = "2";
		$numero_serie = $_POST['numero_serie'];
		$code_inventaire = $_POST['code_inventaire'];
		$marque = $_POST['marque'];
		$panne = $_POST['panne'];
		$fournisseur = $_POST['fournisseur'];
		$Duree_Aproximative = $_POST['Duree_Aproximative'];
		$adresse = $_POST['adresse'];
		$tel = $_POST['tel'];
		$e_mail = $_POST['e_mail'];
		
		$sql = "INSERT INTO `maintenance`(`ref_cat`, `numero_serie`, `code_inventaire`, `marque`, `panne`, `fornisseur`, `duree_aproximative`, `date_sortie`, `adresse`, `tel`, `e_mail`)
				VALUES ('$ref_cat', '$numero_serie', '$code_inventaire','$marque', '$panne', '$fournisseur', '$Duree_Aproximative', SYSDATE(),'$adresse', '$tel', '$e_mail')";
				 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
    }
	header('location: ../entretien.php');
	
?>