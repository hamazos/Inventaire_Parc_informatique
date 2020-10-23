<?php
	sleep(5);	
		include_once('../connection.php');
		$sql = "SELECT * FROM maintenance ORDER BY ID DESC LIMIT 1";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();
		
        require_once('../tcpdf/tcpdf.php');  
        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
        $pdf->SetCreator(PDF_CREATOR);  
        $pdf->SetTitle("Inventaire Pc portable Table");  
        $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
        $pdf->SetDefaultMonospacedFont('helvetica');  
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
        $pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
        $pdf->setPrintHeader(false);  
        $pdf->setPrintFooter(false);  
        $pdf->SetAutoPageBreak(TRUE, 10);  
        $pdf->SetFont('helvetica', '', 8);  
        $pdf->AddPage();
        $contents = '                
	        <header>
                  <img src="img/01.png" alt="MDN logo">
                </header>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>                
                <p style="text-align: center;"><strong>BON DE SORTIE DU MATRIEL POUR REPARATION</strong>&nbsp;</p>
                <p>&nbsp;</p>
                <p style="text-align: center;">N° : '.$row['id'].'/'.$row['ref_cat'].'</p>
                <p style="text-align: center;">date :'.$row['date_sortie'].'</p>
                <hr />
                <p><span style="text-decoration: underline;"><em><strong>Fournisseur</strong></em></span></p>
                <p>Nom :'.$row['fornisseur'].'</p>
                <p>Adresse : '.$row['adresse'].'</p>
                <p>Tel : '.$row['tel'].'</p>
                <p>E-Mail : '.$row['e_mail'].'</p>
                <p><span style="text-decoration: underline;"><strong><em>Designation du matriel</em></strong></span></p>
                <p>N&deg; inventaire : '.$row['code_inventaire'].'</p>
                <p>D&eacute;signation : '.$row['marque'].'</p>
                <p>N&deg; s&eacute;rie :'.$row['numero_serie'].'</p>
                <p><span style="text-decoration: underline;"><strong><em>Detail de l`intervention</em></strong></span></p>
                <p>&nbsp;Panne: '.$row['panne'].'</p>
                <p>&nbsp;</p>
                <hr />
                <p style="text-align: left;">signature du technicien</p>
                <p style="text-align: right;">signature du fournisseur</p>                
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <footer>
                  <img src="img/02.png" alt="MDN logo">
                </footer>
	        ';
        $pdf->writeHTML($contents);  
        $pdf->Output('inventaire.pdf', 'I');
    

    
	

?>