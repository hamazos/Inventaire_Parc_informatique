
<div class="modal fade" id="editPort_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit </h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="maintenance/maint_portable.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">N°serie:</label>
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
						<label class="control-label modal-label">Marque:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="marque" value="<?php echo $row['marque']; ?>">
					</div>
				</div>                
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Panne:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="panne"required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fournisseur:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fournisseur"required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Adresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="adresse"required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tel:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tel"required>
					</div>
				</div>				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">E_Mail:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="e_mail"required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Durée Aproximative:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Duree_Aproximative"required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="insert_maint" class="btn btn-success"onclick="pop_up('maintenance/BON_Sortie.php');"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>
