<?php 

	session_start();
	include 'lib.php';
	include'iniciaJogo.php';
	

	cabecalho('teste');
	
	echo'<p> Essa e uma pagina para teste se voce chegou ate aqui eh uma boa noticia';
	echo'<p>'.$_SESSION['selecao'].'</p>';
	
	//comecaJogo();
	
	rodape();

?>