<?php require_once("inc/header.php"); ?>

<div class="content">

	<?php
	if((isset($_POST['type'])) AND ($_POST['type']==1)){
		$editPages();
	}else if(($_GET['title'])){
		echo '<span class="bg-success">Página <strong>'.$_GET['title'].'</strong> inserida com sucesso.</span>';
	}
	?>
	
	<div class="row">
		<div class="col-md-6">
			<h2>Páginas</h2>
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary pull-right btn-c" href="page_insert.php" title="Criar página">Criar página</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<table class="table table-striped mgr">
				<tr>
					<th>ID</th>
					<th>Título</th>
					<th>Slug</th>
					<th>Aparece no menu?</th>
					<th>Editar</th>
					<th>Visualizar</th>
				</tr>

				<?php

				$query = "SELECT * FROM site ORDER BY id ASC";
				$result = $conn->prepare($query);
				$result->execute();
				while ($page = $result->fetch(PDO::FETCH_ASSOC)) {
					echo '<tr>';
					echo '<td>'.$page['id'].'</td>';
					echo '<td>'.$page['title'].'</td>';
					echo '<td>'.$page['slug'].'</td>';
					echo '<td>'.($page['status']=="1" ? 'Sim':'Não').'</td>';
					echo '<td><a href="page_edit.php?id='.$page['id'].'" title="Editar">[ editar ]</a></td>';
					echo '<td><a target="blank" href="/'.$page['slug'].'" title="Visualizar página">[ Visualizar página ]</a></td>';
					echo '</tr>';
				}
				?>	

			</table>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-primary pull-right" href="page_insert.php" title="Criar página">Criar página</a>
		</div>
	</div>

</div>

<?php require_once("inc/footer.php"); ?>