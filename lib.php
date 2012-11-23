<!-- Fazer uma biblioteca c/ funcao para imprimir o cabecalho e o radape da pagina. Fazer no minimo 2 paginas que use a biblioteca--> 

<?php
	
	function cabecalho($t){
		echo"<!doctype html>";
		echo"<html>";
		echo"<head>";
		echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>';
		echo"<title> $t </title>";
		echo"</head>";
		echo"<body>";
	}
	
	function rodape(){
		echo"</body>";
		echo"</html>";
	}	
?>