<?php require_once("inc/header.php"); ?>

<div class="content">

	<?php $registerPage(); echo $_POST['status']; ?>

	<div class="row">
		<div class="col-md-12">
			<h2>Inserir página</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">


			<form class="mgr" action="page_insert.php" method="POST">

				<div class="form-group">
					<label for="title">Título</label>
					<input type="text" name="title" class="form-control" id="title" value="<?php echo $_POST['title']; ?>">
				</div>

				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" name="slug" class="form-control" id="slug" value="<?php echo $_POST['slug']; ?>">
				</div>

				<div class="form-group">
					<label for="content">Conteúdo</label>					
					<textarea name="content" id="content" class="form-control" rows="20"><?php echo $_POST['content']; ?></textarea>
					<script>                	
						CKEDITOR.replace( 'content' );
					</script>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="<?php echo $_POST['status']; ?>" <?php echo ($_POST['status']==1 ? 'checked':''); ?>>
						Ativa
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="<?php echo $_POST['status']; ?>" <?php echo ($_POST['status']==0 ? 'checked':''); ?>>
						Inativa
					</label>
				</div>

				<div class="actions">
					<input type="hidden" name="type" value="0">
					<button type="submit" name="send" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Salvar</button>
					<a href="pages.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Cancelar</a>
				</div>

			</form>


		</div>
	</div>


</div>

<?php require_once("inc/footer.php"); ?>