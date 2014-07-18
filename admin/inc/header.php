<?php
require_once("functions/AdminControl.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin - Site simples com PDO</title>
	<?php require_once("scripts.php"); ?>
</head>
<body>


	<div class="container">

		<header class="row">

			<div class="col-md-12">

				<div class="row">
					<div class="col-md-12">
						<h1 class="brand"><a href="">Admin - Site simples com PDO</a></h1>
					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<ul class="nav nav-tabs" role="tablist">
							<li><a href="users.php?e=1" title="Bem-vindo Eder!">Bem-vindo Eder!</a></li>
							<li><a href="users.php?e=0" title="Usuários">Usuários</a></li>
							<li><a href="pages.php" title="Páginas">Páginas</a></li>
							<li><a href="logout.php" title="Sair">Sair</a></li>							
						</ul>
					</div>


				</div>


			</header>