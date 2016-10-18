<div class="col-md-offset-2 col-md-8">
	<h4>Frequências - </h4>
	<a class="btn btn-success" href="<?php echo site_url('add'); ?>" title="Cadastrar">+Nova Frequência</a>
	<br><br>
	<table id="Tfrequency" class="table table-responsive table-hover">
		<thead >
			<tr>
				<th class="col-md-1">ID</th>
				<th class="col-md-9">Tipo</th>
				<th class="col-md-2" style="text-align: center" colspan="2">Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if ($frequencies != null) {
				foreach ($frequencies as $frequency): ?>
				<tr>
					<td><?php echo $frequency['idFrequency']; ?></td>
					<td><?php echo $frequency['frequency_description']; ?></td>
					<td><a class="btn btn-primary" title="Editar"
						href="<?php echo site_url('edit') . "/" . $frequency['idFrequency']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
					</td>
					<td>
						<a title="Apagar" class="delete_frequency btn btn-danger" id="<?php echo $frequency['idFrequency'] ?>" href="#"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
				</tr>
			<?php endforeach;
		} ?>
	</tbody>
</table>
<div id="deleteFrequency" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Apagar</h4>
			</div>
			<div class="modal-body">
				<p>Deseja realmente apagar o cadastro?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<a href="#!" id="delete_frequency" data-dismiss="modal" class=" btn btn-danger">Apagar</a>
			</div>
		</div>

	</div>
</div>

	<div hidden id="sucessDelete" class="alert alert-success">
		<span class="glyphicon glyphicon-trash"></span>  Cadastro Exlcuido!
	</div>
</div>
