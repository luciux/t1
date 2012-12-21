 <?php
		
	function cabecalho($t){
		echo"<!doctype html>";
		echo"<html>";
		echo"<head>";
		echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>';
		echo'<link href="estilogame.css" rel="stylesheet" />';
		echo"<title> $t </title>";
		echo"</head>";
		echo"<body>";
	}
	
	function rodape(){
		echo"</body>";
		echo"</html>";
	}	
?>