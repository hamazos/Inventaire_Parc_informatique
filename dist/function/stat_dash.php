<?php 
    include_once('connection.php');
    
    $nbr= "SELECT * FROM bureau";
    $nbr1="SELECT * FROM fax";
    $nbr2="SELECT * FROM imprimante";
    $nbr3="SELECT * FROM photocopie";
    $nbr4="SELECT * FROM inventaire";
    $nbr5="SELECT * FROM scanner";
    $nbr6="SELECT * FROM serveur";

    $result=$conn->query($nbr);
        $row_cnt = $result->num_rows;
    $result1=$conn->query($nbr1);
        $row_cnt1 = $result1->num_rows;
    $result2=$conn->query($nbr2);
        $row_cnt2 = $result2->num_rows;
    $result3=$conn->query($nbr3);
        $row_cnt3 = $result3->num_rows;
    $result4=$conn->query($nbr4);
        $row_cnt4 = $result4->num_rows;
    $result5=$conn->query($nbr5);
        $row_cnt5 = $result5->num_rows;        
    $result6=$conn->query($nbr6);
        $row_cnt6 = $result6->num_rows;
        
    $row_total =$row_cnt + $row_cnt1 + $row_cnt2 + $row_cnt3 + $row_cnt4 + $row_cnt5 + $row_cnt6;

    $nbr00="SELECT * FROM `bureau` WHERE utilisteur <> 'EN STOCK'";
    $nbr01="SELECT * FROM `fax` WHERE emplacement <> 'EN STOCK'";
    $nbr02="SELECT * FROM `imprimante` WHERE emplacement <> 'EN STOCK'";
    $nbr03="SELECT * FROM `photocopie` WHERE emplacement <> 'EN STOCK'";
    $nbr04="SELECT * FROM `inventaire` WHERE utilisteur <> 'EN STOCK'";
    $nbr05="SELECT * FROM `scanner` WHERE emplacement <> 'EN STOCK'";
    $nbr06="SELECT * FROM `serveur` WHERE utilisteur <> 'EN STOCK'";

    $result00=$conn->query($nbr00);
        $row_cnt00 = $result00->num_rows;
    $result01=$conn->query($nbr01);
        $row_cnt01 = $result01->num_rows;
    $result02=$conn->query($nbr02);
        $row_cnt02 = $result02->num_rows;
    $result03=$conn->query($nbr03);
        $row_cnt03 = $result03->num_rows;
    $result04=$conn->query($nbr04);
        $row_cnt04 = $result04->num_rows;
    $result05=$conn->query($nbr05);
        $row_cnt05 = $result05->num_rows;        
    $result06=$conn->query($nbr06);
        $row_cnt06 = $result06->num_rows;

    $row_serv =$row_cnt00 + $row_cnt01 + $row_cnt02 + $row_cnt03 + $row_cnt04 + $row_cnt05 + $row_cnt06;    
    
    $nbr10="SELECT * FROM `bureau` WHERE utilisteur = 'EN STOCK'";
    $nbr11="SELECT * FROM `fax` WHERE emplacement = 'EN STOCK'";
    $nbr12="SELECT * FROM `imprimante` WHERE emplacement = 'EN STOCK'";
    $nbr13="SELECT * FROM `photocopie` WHERE emplacement = 'EN STOCK'";
    $nbr14="SELECT * FROM `inventaire` WHERE utilisteur = 'EN STOCK'";
    $nbr15="SELECT * FROM `scanner` WHERE emplacement = 'EN STOCK'";
    $nbr16="SELECT * FROM `serveur` WHERE utilisteur = 'EN STOCK'";

    $result10=$conn->query($nbr10);
        $row_cnt10 = $result10->num_rows;
    $result11=$conn->query($nbr11);
        $row_cnt11 = $result11->num_rows;
    $result12=$conn->query($nbr12);
        $row_cnt12 = $result12->num_rows;
    $result13=$conn->query($nbr13);
        $row_cnt13 = $result13->num_rows;
    $result14=$conn->query($nbr14);
        $row_cnt14 = $result14->num_rows;
    $result15=$conn->query($nbr15);
        $row_cnt15 = $result15->num_rows;
    $result16=$conn->query($nbr16);
        $row_cnt16 = $result16->num_rows;

    $row_stock =$row_cnt10 + $row_cnt11 + $row_cnt12 + $row_cnt13 + $row_cnt14 + $row_cnt15 + $row_cnt16; 

    $nbr20="SELECT * FROM bureau WHERE etat = 'EN PANNE'";
    $nbr21="SELECT * FROM `fax` WHERE etat = 'EN PANNE'";
    $nbr22="SELECT * FROM `imprimante` WHERE etat = 'EN PANNE'";
    $nbr23="SELECT * FROM `photocopie` WHERE etat = 'EN PANNE'";
    $nbr24="SELECT * FROM `inventaire` WHERE etat = 'EN PANNE'";
    $nbr25="SELECT * FROM `scanner` WHERE etat = 'EN PANNE'";
    $nbr26="SELECT * FROM `serveur` WHERE etat = 'EN PANNE'";

    $result20=$conn->query($nbr20);
        $row_cnt20 = $result20->num_rows;
    $result21=$conn->query($nbr21);
        $row_cnt21 = $result21->num_rows;
    $result22=$conn->query($nbr22);
        $row_cnt22 = $result22->num_rows;
    $result23=$conn->query($nbr23);
        $row_cnt23 = $result23->num_rows;
    $result24=$conn->query($nbr24);
        $row_cnt24 = $result24->num_rows;
    $result25=$conn->query($nbr25);
        $row_cnt25 = $result25->num_rows;
    $result26=$conn->query($nbr26);
        $row_cnt26 = $result26->num_rows;

    $row_panne =$row_cnt20 + $row_cnt21 + $row_cnt22 + $row_cnt23 + $row_cnt24 + $row_cnt25 + $row_cnt26;
    
    $nbr30="SELECT * FROM bureau WHERE etat = 'ABONDONNER'";
    $nbr31="SELECT * FROM `fax` WHERE etat = 'ABONDONNER'";
    $nbr32="SELECT * FROM `imprimante` WHERE etat = 'ABONDONNER'";
    $nbr33="SELECT * FROM `photocopie` WHERE etat = 'ABONDONNER'";
    $nbr34="SELECT * FROM `inventaire` WHERE etat = 'ABONDONNER'";
    $nbr35="SELECT * FROM `scanner` WHERE etat = 'ABONDONNER'";
    $nbr36="SELECT * FROM `serveur` WHERE etat = 'ABONDONNER'";

    $result30=$conn->query($nbr30);
        $row_cnt30 = $result30->num_rows;
    $result31=$conn->query($nbr31);
        $row_cnt31 = $result31->num_rows;
    $result32=$conn->query($nbr32);
        $row_cnt32 = $result32->num_rows;
    $result33=$conn->query($nbr33);
        $row_cnt33 = $result33->num_rows;
    $result34=$conn->query($nbr34);
        $row_cnt34 = $result34->num_rows;
    $result35=$conn->query($nbr35);
        $row_cnt35 = $result35->num_rows;
    $result36=$conn->query($nbr36);
        $row_cnt36 = $result36->num_rows;

    $row_abond =$row_cnt30 + $row_cnt31 + $row_cnt32 + $row_cnt33 + $row_cnt34 + $row_cnt35 + $row_cnt36;
?>