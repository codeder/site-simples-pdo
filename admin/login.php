<?php require_once("functions/AdminControl.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin - Site simples com PDO</title>
	<?php require_once("inc/scripts.php"); ?>
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="login">

					<?php $checkExistsUser(); ?>

					<div class="row">
						<div class="col-md-12">
							<form role="form" class="jumbotron" method="POST">
								<div class="form-group">
									<label for="username">Login</label>
									<input type="text" class="form-control" name="username" id="username">
								</div>
								<div class="form-group">
									<label for="pass">Senha</label>
									<input type="password" name="password" class="form-control" id="pass">
								</div>

								<button type="submit" name="send" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Entrar</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<p style="text-align:center"><strong>Login: </strong> admin <br><strong>Senha: </strong> admin123</p>
			</div>
		</div>

	</div>