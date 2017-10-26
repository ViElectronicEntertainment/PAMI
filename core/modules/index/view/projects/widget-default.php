<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newproject" class="btn btn-default"><i class='fa fa-th-list'></i> Nuevo Proyecto</a>
</div>
		<h1>Proyectos</h1>
<br>
		<?php

		$users = ProjectData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td style="width:190px;"><a href="index.php?view=projecthistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a> <a href="index.php?view=editproject&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a> <a href="index.php?view=delproject&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Proyectos</p>";
		}


		?>


	</div>
</div>