<?php
$pacient = ProjectData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
		<h1>Historial de Eventos del Proyecto</h1>
<h4>Proyecto: <?php echo $pacient->name;?></h4>

<br>
		<?php
		$users = EventData::getAllByProjectId($_GET["id"]);
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Fecha</th>
			</thead>
			<?php
			foreach($users as $user){
				$category = $user->getCategory();
				?>
				<tr>
				<td><?php echo $user->title; ?></td>
				<td><?php echo $category->name; ?></td>
				<td><?php echo $user->date_at." ".$user->time_at; ?></td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay citas</p>";
		}


		?>


	</div>
</div>