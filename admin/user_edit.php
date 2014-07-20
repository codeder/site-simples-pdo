<?php require_once("inc/header.php"); ?>

<div class="content">

    <?php

    $query = "SELECT * FROM users WHERE id=:id";
    $result = $conn->prepare($query);
    $result->execute(array(':id' => $_GET['uid']) );
    while  ($user = $result->fetch(PDO::FETCH_ASSOC)) {
    ?>

	<div class="row">
		<div class="col-md-12">
			<h2>Usuário</h2>
		</div>
	</div>


	<div class="row">
		<div class="col-md-12">


			<form class="mgr" action="users.php" method="POST">

				<div class="form-group">
					<label for="name">Nome do usuário</label>
					<input type="text" name="name" class="form-control" id="name" value="<?php echo $user['name']; ?>">
				</div>

				<div class="form-group">
					<label for="slug">Username</label>
					<input type="text" name="username" class="form-control" id="username" value="<?php echo $user['username']; ?>">
				</div>

				<div class="form-group">
					<label for="email">E-mail:</label>
					<input type="email" name="email" class="form-control" id="email" value="<?php echo $user['email']; ?>">
				</div>

                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="1"<?php if($user['status']==1){ echo "checked";} ?>>
						Ativo
					</label>
				</div>

				<div class="radio">
					<label>
						<input type="radio" name="status" value="0"<?php if($user['status']==0){ echo "checked";} ?>>
						Inativo
					</label>
				</div>

				<div class="actions">
					<input type="hidden" name="uid" value="<?php echo $user['id']; ?>">
					<input type="hidden" name="type" value="1">
					<button type="submit" name="send" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Salvar</button>
					<a href="users.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon glyphicon-floppy-disk"></span> Cancelar</a>
				</div>

			</form>


		</div>
	</div>

<?php } ?>

</div>

<?php require_once("inc/footer.php"); ?>