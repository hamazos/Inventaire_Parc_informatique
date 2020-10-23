<?php
	function generateRow(){
		$contents = '';
		include_once('../connection.php');
		$sql = "SELECT * FROM photocopie";

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
				<td>".$row['emplacement']."</td>
				<td>".$row['etat']."</td>
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
    $pdf->SetTitle("Inventaire Photocopie Table");  
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
      	<h2 align="center">Inventaire Photocopie Table</h2>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
		   		<th width="5%">ID</th>
				<th>S/N</th>
				<th>N°Inventaire</th>
				<th>Designation</th>
				<th>Marque</th>
				<th>Modele</th>
				<th>Affectation</th>
				<th>Etat</th>
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('Photocopie.pdf', 'I');
	

?>