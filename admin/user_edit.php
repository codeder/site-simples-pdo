<?php require_once("inc/header.php"); ?>

<div class="content">

    <?php $registerUser(); ?>

	<div class="row">
		<div class="col-md-12">
			<h2>Usuário</h2>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">


			<form class="mgr" action="" method="POST">

				<div class="form-group">
					<label for="name">Nome do usuário</label>
					<input type="text" name="name" class="form-control" id="name" value="">
				</div>

				<div class="form-group">
					<label for="slug">Username</label>
					<input type="text" name="username" class="form-control" id="username">
				</div>

				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="email" class="form-control" id="email">
				</div>

                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="1">
						Ativo
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="0">
						Inativo
					</label>
				</div>

				<div class="actions">
					<button type="submit" name="send" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Salvar</button>
					<button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Cancelar</button>
				</div>

			</form>


		</div>
	</div>



</div>

<?php require_once("inc/footer.php"); ?>