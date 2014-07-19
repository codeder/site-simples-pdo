<?php require_once("inc/header.php"); ?>

<div class="content">

    <?php
    $query = "SELECT * FROM site WHERE id=:id";
    $result = $conn->prepare($query);
    $result->execute(array(':id' => $_GET['id']) );
    while  ($page = $result->fetch(PDO::FETCH_ASSOC)) {
    ?>
	
	<div class="row">
		<div class="col-md-12">
			<h2>Editar: "<?php echo $page['title']; ?>"</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">


			<form class="mgr" action="pages.php" method="POST">

				<div class="form-group">
					<label for="title">Título</label>
					<input type="text" name="title" class="form-control" id="title" value="<?php echo $page['title']; ?>">
				</div>

				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" name="slug" class="form-control" id="slug" value="<?php echo $page['slug']; ?>">
				</div>

				<div class="form-group">
					<label for="content">Conteúdo</label>					
					<textarea name="content" id="content" class="form-control" rows="20"><?php echo $page['content']; ?></textarea>
					<script>                	
						CKEDITOR.replace( 'content' );
					</script>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="1" <?php echo ($page['status']==1 ? 'checked':'') ?>>
						Ativa
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="0" <?php echo ($page['status']==0 ? 'checked':'') ?>>
						Inativa
					</label>
				</div>

				<div class="actions">
					<input type="hidden" name="id" value="<?php echo $page['id']; ?>">
					<input type="hidden" name="type" value="1">
					<button type="submit" name="send" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Salvar</button>
					<a href="pages.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Cancelar</a>
				</div>

			</form>


		</div>
	</div>

<?php } ?>


</div>

<?php require_once("inc/footer.php"); ?>