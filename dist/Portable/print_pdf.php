<?php
	function generateRow(){
		$contents = '';
		include_once('../connection.php');
		$sql = "SELECT * FROM inventaire";

		//use for MySQLi OOP
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td >".$row['id']."</td>
				<td>".$row['numero_serie']."</td>
				<td>".$row['code_inventaire']."</td>
				<td>".$row['designation']."</td>
				<td>".$row['marque']."</td>
				<td>".$row['model']."</td>
				<td>".$row['caracteristique']."</td>
				<td>".$row['etat']."</td>
				<td>".$row['utilisteur']."</td>
				<td>".$row['systeme']."</td>
			</tr>
			";
		}
		////////////////

		//use for MySQLi Procedural
		// $query = mysqli_query($conn, $sql);
		// while($row = mysqli_fetch_assoc($query)){
		// 	$contents .= "
		// 	<tr>
		// 		<td>".$row['id']."</td>
		// 		<td>".$row['firstname']."</td>
		// 		<td>".$row['lastname']."</td>
		// 		<td>".$row['address']."</td>
		// 	</tr>
		// 	";
		// }
		////////////////
		
		return $contents;
	}

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Inventaire Pc portable Table");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '30', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 8);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">Inventaire Pc portable Table</h2>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
		   		<th width="5%">ID</th>
				<th width="7%">S/N</th>
				<th width="7%">N°Inventaire</th>
				<th width="15%">Designation</th>
				<th width="7%">Marque</th>
				<th width="7%">Modele</th>
				<th width="7%">Processeur</th>
				<th width="5%">Etat</th>
				<th width="20%">Utilisateur</th>
				<th width="20%">Systeme</th>
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('inventaire.pdf', 'I');
	

?>