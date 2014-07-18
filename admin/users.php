<?php require_once("inc/header.php"); ?>

<?php if($_GET['e']==0){ ?>

<div class="content">
	
	<div class="row">
		<div class="col-md-6">
			<h2>Editar usuários</h2>
		</div>
		<div class="col-md-6">
			<a class="btn btn-primary pull-right" href="users.php?e=1" title="Criar usuário">Criar usuário</a>
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
			<a class="btn btn-primary pull-right" href="users.php?e=1" title="Criar usuário">Criar usuário</a>
		</div>
	</div>

</div>


<?php } else if($_GET['e']==1){ ?>


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


<?php } else { ?>

    <div class="row">
        <div class="col-md-12">
            <p class="bg-danger">Página não encontrada</p>
        </div>
    </div>

<?php } ?>





<?php require_once("inc/footer.php"); ?>