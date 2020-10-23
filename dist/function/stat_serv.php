<?php 
    include_once('connection.php');
    $nbr="SELECT * FROM serveur";
    if($result=$conn->query($nbr)){
        $row_cnt1 = $result->num_rows;
    }
    $nbr="SELECT * FROM `serveur` WHERE utilisteur <> 'EN STOCK'";
    if($result=$conn->query($nbr)){
        $row_cnt2 = $result->num_rows;
    }
    $nbr="SELECT * FROM `serveur` WHERE utilisteur = 'EN STOCK'";
    if($result=$conn->query($nbr)){
        $row_cnt3 = $result->num_rows;
    }
    $nbr="SELECT * FROM serveur WHERE etat = 'EN PANNE'";
    if($result=$conn->query($nbr)){
        $row_cnt4 = $result->num_rows;
    }
?>