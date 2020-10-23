<?php 
    session_start();
    include_once('connection.php');
    include_once('include/head.php');      
?> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><i class="fas fa-tools"></i>Maintenance</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">EN Maintenance</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>réf_Cat</th>
                                    <th>N/S</th>
                                    <th>N° Inv</th>
                                    <th>Marque</th>
                                    <th>Panne</th>
                                    <th>Fournisseur</th>
                                    <th>Durée Approximative</th>
                                    <th>Date de Sortie</th>
                                    <th>Date de Retour</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                    $sql = "SELECT * FROM `maintenance`";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                    echo 
                                    "<tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['ref_cat']."</td>
                                        <td>".$row['numero_serie']."</td>
                                        <td>".$row['code_inventaire']."</td>
                                        <td>".$row['marque']."</td>
                                        <td>".$row['panne']."</td>
                                        <td>".$row['fornisseur']."</td>
                                        <td>".$row['duree_aproximative']."</td>
                                        <td>".$row['date_sortie']."</td>
                                        <td>".$row['date_retour']."</td>
                                        <td>
                                        <a href='#valid_".$row['id']."'<button type='button'class='btn btn-outline-primary btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='valider'><i class='fa fa-check' aria-hidden='true'></i> Valider</button></a>
                                        </td>
                                    </tr>";
                                    include('maintenance/maintenance_valide_modal.php');
                                    }
                                ?>          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Matreil En Panne</li>
            </ol>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance PC Portable - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                      
                                    <?php
                                        $sql = "SELECT * FROM inventaire WHERE etat = 'EN PANNE'";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            echo 
                                            "<tr>
                                                <td>".$row['numero_serie']."</td>
                                                <td>".$row['code_inventaire']."</td>
                                                <td>".$row['marque']."</td>
                                                <td>
                                                    <a href='#editPort_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                                </td>
                                            </tr>";
                                            include('maintenance/maintenance_Portable_modal.php');
                                        }
                                    ?>            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance PC Bureau - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php
                                    $sql = "SELECT * FROM bureau  WHERE etat = 'EN PANNE'";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo 
                                        "<tr>
                                            <td>".$row['numero_serie']."</td>
                                            <td>".$row['code_inventaire']."</td>
                                            <td>".$row['marque']."</td>
                                            <td>
                                                <a href='#editbur_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                            </td>
                                        </tr>";
                                        include('maintenance/maintenance_bureau_modal.php');
                                    }
                                ?>                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance Photocopie - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                      
                                    <?php
                                        $sql = "SELECT * FROM photocopie WHERE etat = 'EN PANNE'";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            echo 
                                            "<tr>
                                                <td>".$row['numero_serie']."</td>
                                                <td>".$row['code_inventaire']."</td>
                                                <td>".$row['marque']."</td>
                                                <td>
                                                    <a href='#editphoto_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                                </td>
                                            </tr>";
                                            include('maintenance/maintenance_photocopie_modal.php');
                                        }
                                    ?>            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance Imprimante - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php
                                    $sql = "SELECT * FROM imprimante  WHERE etat = 'EN PANNE'";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo 
                                        "<tr>
                                            <td>".$row['numero_serie']."</td>
                                            <td>".$row['code_inventaire']."</td>
                                            <td>".$row['marque']."</td>
                                            <td>
                                                <a href='#editimpri_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                            </td>
                                        </tr>";
                                        include('maintenance/maintenance_imprimante_modal.php');
                                    }
                                ?>                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance Scanner - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                      
                                    <?php
                                        $sql = "SELECT * FROM scanner WHERE etat = 'EN PANNE'";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            echo 
                                            "<tr>
                                                <td>".$row['numero_serie']."</td>
                                                <td>".$row['code_inventaire']."</td>
                                                <td>".$row['marque']."</td>
                                                <td>
                                                    <a href='#editscan_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                                </td>
                                            </tr>";
                                            include('maintenance/maintenance_scanner_modal.php');
                                        }
                                    ?>            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance FAX - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php
                                    $sql = "SELECT * FROM fax  WHERE etat = 'EN PANNE'";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo 
                                        "<tr>
                                            <td>".$row['numero_serie']."</td>
                                            <td>".$row['code_inventaire']."</td>
                                            <td>".$row['marque']."</td>
                                            <td>
                                                <a href='#editfax_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                            </td>
                                        </tr>";
                                        include('maintenance/maintenance_fax_modal.php');
                                    }
                                ?>                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-tools mr-1"></i>Maintenance Serveur - 2020</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>N°Inventaire</th>
                                        <th>Marque</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>                                      
                                    <?php
                                        $sql = "SELECT * FROM serveur WHERE etat = 'EN PANNE'";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            echo 
                                            "<tr>
                                                <td>".$row['numero_serie']."</td>
                                                <td>".$row['code_inventaire']."</td>
                                                <td>".$row['marque']."</td>
                                                <td>
                                                    <a href='#editserv_".$row['id']."'<button type='button'class='btn btn-outline-danger btn-rounded btn-sm my-0'data-toggle='modal' data-placement='top' title='Maintenace'><i class='fas fa-tools mr-1'></i>Maintenance</button></a>
                                                </td>
                                            </tr>";
                                            include('maintenance/maintenance_serveur_modal.php');
                                        }
                                    ?>            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php 
    include_once('include/footer.php');      
?> 