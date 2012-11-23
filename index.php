<?php 
	
	include"lib.php";
	include"Acessos.php";
	
	session_start();
	
	cabecalho('FOR YOUR FUN');

	$numAcessos = 0;
	
	$acesso = new Acessos();
	
	$numAcessos = $acesso->numVisitas();
	
	
	echo"<p>$numAcessos</p>";
	
	echo "<p>http://localhost/t2/jogador.php?id=$numAcessos</p>";
	
	echo'<form action="jogo.php" method="POST">';
		
		echo'<p> NAME(PLAYER 1) <input type="text" name="nomeJogador1"/> </p>';
		
 		
		
		echo '<d1><dd>';
			echo '<input type="radio" name="selecao" value="bolinha" checked/>O';
			echo '<input type="radio" name="selecao" value="xis"/>X';
			 			
			echo'<input type="hidden" name="keyplayer1" value="'.$numAcessos.'" />';
			echo '<p> <input type="submit" value"Play!"/> </p>';
			
		echo'</d1></dd>';
		echo '</form>';
		
		if(isset($_SESSION['erro'])){
			
			echo'<p> '.$_SESSION['erro'].' </p>';
			unset($_SESSION['erro']);
		}
		
		if(isset($_SESSION['errop2'])){
			
			echo'<p> '.$_SESSION['errop2'].' </p>';
			unset($_SESSION['errop2']);
		}
	
		rodape();
?>