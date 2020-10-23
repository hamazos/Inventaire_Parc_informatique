<?php 
    include('function/stat_serv.php'); 
    include_once('include/head.php');      
?> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-server"></i>Serveur</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Serveur</li>
            </ol>                        
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">totale</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h1><a class="small text-white stretched-link" ><?php echo $row_cnt1;?></a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">En service</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h1><a class="small text-white stretched-link" ><?php echo $row_cnt2;?></a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">En stock</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h1><a class="small text-white stretched-link" ><?php echo $row_cnt3;?></a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">En panne</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <h1><a class="small text-white stretched-link" ><?php echo $row_cnt4; ?></a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body"> 
                    <div class="row">
                        <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span><i class="fas fa-plus"></i> Ajouter Serveur</a>
                        <a href="#" class="btn btn-success"style="position: absolute;right: 25px;"onclick="pop_up('serveur/print_pdf.php');"><span class="glyphicon glyphicon-print"></span><i class="fas fa-file-pdf"></i> exporter PDF</a>
                    </div>
                    <div class="table-responsive"style="margin-top: 20px;">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>S/N</th>
                                    <th>N°Inv</th>
                                    <th>Designation</th>
                                    <th>Marque</th>
                                    <th>Modele</th>
                                    <th>CPU</th>
                                    <th>Etat</th>
                                    <th>Affectation</th>
                                    <th>Systeme</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                    $sql = "SELECT * FROM serveur";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo 
                                            "<tr>
                                                <td>".$row['id']."</td>
                                                <td>".$row['numero_serie']."</td>
                                                <td>".$row['code_inventaire']."</td>
                                                <td>".$row['designation']."</td>
                                                <td>".$row['marque']."</td>
                                                <td>".$row['model']."</td>
                                                <td>".$row['caracteristique']."</td>
                                                <td>".$row['etat']."</td>
                                                <td>".$row['utilisteur']."</td>
                                                <td>".$row['systeme']."</td>
                                                <td>
                                                    <a href='#edit_".$row['id']."'class='btn btn-success btn-sm rounded-0' type='button' data-toggle='modal' data-placement='top' title='Edit'><i class='fa fa-edit fa-xs'></i></button></a>
                                                    <a href='#delete_".$row['id']."'class='btn btn-danger btn-sm rounded-0' type='button' data-toggle='modal' data-placement='top' title='Delete'><i class='fa fa-trash fa-xs'></i></button></a>
                                                </td>
                                            </tr>";
                                        include('serveur/edit_delete_modal.php');
                                    }
                                ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include('serveur/add_modal.php');
    include_once('include/footer.php');      
?> 