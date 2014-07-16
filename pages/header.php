<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Site simples2 com PHP - Request e response</title>
	<?php require_once("scripts.php"); ?>
</head>
<body>


	<div class="container">

		<header class="row">

        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                       <h1 class="brand"><a href="<?php echo $dir; ?>">Code Education</a></h1>
                </div>
            </div>

            <div class="row">

            <div class="col-md-8">

				<ul class="nav nav-tabs" role="tablist">
                    <li><a href="<?php echo $dir; ?>" title="Home">Home</a></li>
                    <?php
                        $p = new Pages($conn);
                        foreach($p->listpages() as $pags){
                            echo '<li><a href="'.$dir.strtolower($pags["slug"]).'" title="'.$pags["title"].'">'.$pags["title"].'</a></li>';
                        }
                    ?>
				</ul>
            </div>

            <div class="col-md-4">
                <form class="navbar-form navbar-right" role="search" method="get" action="<?php echo $dir; ?>">
                    <div class="form-group">
                        <input type="text" name="s" class="form-control" placeholder="Busca">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
            </div>

        </div>


		</header>