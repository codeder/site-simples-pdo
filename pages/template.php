<?php 

if($pag=="contato"){
	require_once("contato.php");
}else if($pag=="sucesso"){
	require_once("sucesso.php");
}
else{
	if($pag != "busca"){
		echo '<h1>'.$res['title'].'</h1>';
	}
	echo $res['content'];
}
?>
