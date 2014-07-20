<?php
session_start();
require_once("functions/AdminControl.php");
if(!$_SESSION['logged']){
	header("Location: login.php");
}
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
						<h1 class="brand"><a href="/admin">Admin - Site simples com PDO</a></h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs" role="tablist">
							<li><a href="../admin/user_edit.php" title="Bem-vindo Eder!">Bem-vindo Eder!</a></li>
							<li><a href="../admin/users.php" title="Usuários">Usuários</a></li>
							<li><a href="../admin/pages.php" title="Páginas">Páginas</a></li>
							<li><a href="../admin/logout.php" title="Sair">Sair</a></li>
						</ul>
					</div>
				</div>

			</header>
