<?php require_once("inc/header.php"); ?>

<form role="form" class="jumbotron">
  <div class="form-group">
    <label for="username">Login</label>
    <input type="text" class="form-control" name="username" id="username">
  </div>
  <div class="form-group">
    <label for="pass">Senha</label>
    <input type="password" name="password" class="form-control" id="pass">
  </div>

  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Entrar</button>

</form>

<?php require_once("inc/footer.php"); ?>