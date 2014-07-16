<?php require_once("inc/header.php"); ?>

<div class="content">
	
	<div class="row">
		<div class="col-md-12">
			<h2>Página: Serviços</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">


			<form class="mgr" action="" method="">

				<div class="form-group">
					<label for="title">Título</label>
					<input type="text" name="title" class="form-control" id="title">
				</div>

				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" name="slug" class="form-control" id="slug">
				</div>

				<div class="form-group">
					<label for="slug">Conteúdo</label>					
					<textarea name="content" id="content" class="form-control" rows="20"></textarea>
					<script>                	
						CKEDITOR.replace( 'content' );
					</script>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="1" checked>
						Ativa
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="0">
						Inativa
					</label>
				</div>

				<div class="actions">
					<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Salvar</button>
					<button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Cancelar</button>
				</div>

			</form>


		</div>
	</div>



</div>

<?php require_once("inc/footer.php"); ?>