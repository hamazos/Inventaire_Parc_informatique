<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add New</h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Bureau/add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">N°serie:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="numero_serie" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">N°Inventaire:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="code_inventaire" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Designation:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="designation" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Marque:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="marque" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Model:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="model" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Processeur:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="caracteristique" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Etat:</label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="etat">
							<option selected>....</option>
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
						<input type="text" class="form-control" name="utilisateur" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Systeme:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="systeme" required>
					</div>
				</div>
			

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>