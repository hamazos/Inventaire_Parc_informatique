<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit </h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Portable/edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">N°serie::</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="numero_serie" value="<?php echo $row['numero_serie']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">N°Inventaire:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="code_inventaire" value="<?php echo $row['code_inventaire']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Designation:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="designation" value="<?php echo $row['designation']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Marque:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="marque" value="<?php echo $row['marque']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Model:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="model" value="<?php echo $row['model']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">processeur:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="caracteristique" value="<?php echo $row['caracteristique']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Etat:</label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="etat">
							<option selected><?php echo $row['etat']; ?></option>
							<option value="BON">BON</option>
							<option value="EN PANNE">EN PANNE</option>
							<option value="ABONDONNER">ABONDONNER</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Utilisateur:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="utilisateur" value="<?php echo $row['utilisteur']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Systeme:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="systeme" value="<?php echo $row['systeme']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Member</h4>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Etes-vous sûr que vous voulez supprimer</p>
				<!-- <h2 class="text-center"><?php echo $row['designation'].' '.$row['utilisteur']; ?></h2> -->
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="Portable/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>