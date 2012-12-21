<?php

	require 'lib.php';
	session_start();
	
	@$matriz = $_SESSION['matriz'];
	echo"<!doctype html>";
		echo"<html>";
		echo"<head>";
		echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>';
		echo'<META HTTP-EQUIV="REFRESH" CONTENT="3"/>';
		echo'<link href="estilogame.css" rel="stylesheet" />';
		echo"<title> Tabuleiro </title>";
		echo"</head>";
		echo"<body>";
		
	
	if(file_exists($matriz)){
		
		$file = fopen($matriz, "r");
		
		$palavras = fgets($file);
		
		$arquivo = explode(',', $palavras, 9);
		
		fclose($file);
	}
	
	
	
echo'<div id="container">';
			
			echo'<div id="box">';
					
								
					
									
					if(@$arquivo[0] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo1=1&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[0] == 1){
						$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo1=1&nome=$bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[0] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo1=1&nome=$xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					if(@$arquivo[1] == 0){
						$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo2=2&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[1] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo2=2&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[1] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo2=2&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					if(@$arquivo[2] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo3=3&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[2] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo3=3&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[2] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo3=3&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					
					if(@$arquivo[3] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo4=4&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[3] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo4=4&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[3] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo4=4&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					if(@$arquivo[4] == 0){
						$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo5=5&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[4] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo5=5&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[4] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo5=5&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					
					if(@$arquivo[5] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo6=6&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[5] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo6=6&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[5] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo6=6&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					if(@$arquivo[6] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo7=7&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[6] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo7=7&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[6] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo7=7&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
					
					if(@$arquivo[7] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo8=8&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}			
					
					if(@$arquivo[7] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo8=8&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					if(@$arquivo[7] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo8=8&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}		
					
					if(@$arquivo[8] == 0){
						@$img = 'img/loading.gif';
						echo'<div id="boxzinha"><a href="teste.php?campo9=9&nome=nada"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					if(@$arquivo[8] == 1){
						@$img = 'img/bolinha.png';
						echo'<div id="boxzinha"><a href="teste.php?campo9=9&nome=bolinha"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a></div>';	
					}
					
					
					if(@$arquivo[8] == 2){
						@$img = 'img/xizinho.png';
						echo'<a href="teste.php?campo9=9&nome=xizinho"><div id="boxzinha"><img src="'.$img.'" width="200" /></div></a>';	
					}
				
			
					echo '<button type="submit">Jogar</button>';
					
					
				
					
					
					//Ver a var $nome para identificar o carinha
					
					/*
					echo'<a href="jogo.php?campo3=3&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
					echo'<a href="jogo.php?campo4=4&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
					echo'<a href="jogo.php?campo5=5&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
					echo'<a href="jogo.php?campo6=6&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
					echo'<a href="jogo.php?campo7=7&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
					echo'<a href="jogo.php?campo8=8&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
					echo'<a href="jogo.php?campo9=9&nome=$nome"><div id="boxzinha"><img src="img/loading.gif" width="200" /></div></a>';
				
					*/
				
				
				//if(@$_GET['campo1']==1){
					//vai coloca a imagem de um xizinho
					//echo 'bolinha';
				//}
			
			echo'</div>';
				
				
				
		

echo'</div>';		

	rodape();
?>
