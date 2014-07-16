<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
?>

<article class="row">
	<div class="col-md-12">
		<h2>Obrigado pelo contato</h2>
		<p class="bg-success">Seus dados foram enviados com sucesso. Confira abaixo:</p>

		<p>
			<strong>Nome:</strong><br>
			<?= $name; ?>			
		</p>		

		<p>
			<strong>Email:</strong> <br>
			<?= $email; ?>
		</p>

		<p>
			<strong>Assunto:</strong> <br>
			<?= $subject; ?>
		</p>

		<p>
			<strong>Mensagem:</strong> <br>
			<?= $message; ?>
		</p>		


	</div>
</article>