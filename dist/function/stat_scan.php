<?php 
    include_once('connection.php');
    $nbr="SELECT * FROM scanner";
    if($result=$conn->query($nbr)){
        $row_cnt1 = $result->num_rows;
    }
    $nbr="SELECT * FROM `scanner` WHERE emplacement <> 'EN STOCK'";
    if($result=$conn->query($nbr)){
        $row_cnt2 = $result->num_rows;
    }
    $nbr="SELECT * FROM `scanner` WHERE emplacement = 'EN STOCK'";
    if($result=$conn->query($nbr)){
        $row_cnt3 = $result->num_rows;
    }
    $nbr="SELECT * FROM scanner WHERE etat = 'EN PANNE'";
    if($result=$conn->query($nbr)){
        $row_cnt4 = $result->num_rows;
    }
?>