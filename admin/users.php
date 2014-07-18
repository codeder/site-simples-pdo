<?php require_once("inc/header.php"); ?>


<div class="content">

    <?php $registerUser(); ?>
	
	<div class="row">
		<div class="col-md-6">
			<h2>Editar usuários</h2>
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary pull-right" href="insert_user.php" title="Criar usuário">Criar usuário</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Status</th>
					<th>&nbsp;</th>
				</tr>

                <?php $getUsers(); ?>

			</table>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
            <a class="btn btn-primary pull-right" href="insert_user.php" title="Criar usuário">Criar usuário</a>
		</div>
	</div>

</div>


<?php require_once("inc/footer.php"); ?>