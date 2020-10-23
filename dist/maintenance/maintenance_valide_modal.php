
<div class="modal fade" id="valid_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Valider maintenance </h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="maintenance/maint_valide.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>"> 
				<input type="hidden" class="form-control" name="ref_cat" value="<?php echo $row['ref_cat']; ?>"> 
				<input type="hidden" class="form-control" name="numero_serie" value="<?php echo $row['numero_serie']; ?>">   
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">date Retour:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="date_retour"required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">etat:</label>
					</div>
					<div class="col-sm-10">
						<select class="browser-default custom-select" name="etat">
							<option selected>....</option>
							<option value="BON">BON</option>
							<option value="ABONDONNER">ABONDONNER</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">réaffectation:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="reaffectation"required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="valid" class="btn btn-outline-success"><span class="glyphicon glyphicon-check"><i class='fa fa-check' aria-hidden='true'></i></span> Valider</a>
			</form>
            </div>

        </div>
    </div>
</div>
