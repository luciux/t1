<?php 
	
	include"lib.php";
	include"Acessos.php";
	
	session_start();
	
	cabecalho('FOR YOUR FUN');

	$numAcessos = 0;
	
	$acesso = new Acessos();
	
	$numAcessos = $acesso->numVisitas();
	
	$true = 1010; // para saber que jogador 1 é bolinha, funciona como um código
	
	echo"<p>$numAcessos</p>";
	
	echo "<p>http://localhost/t1/jogador.php?id=$numAcessos&selecao=$true</p>";
	
	echo'<form action="jogo.php" method="POST">';
		
		echo'<p>NAME(PLAYER 1)<input type="text" name="nomeJogador1"/></p>';
		
		echo '<input type="hidden" name="selecao" value="bolinha"/>';		
		echo'<input type="hidden" name="keyplayer1" value="'.$numAcessos.'"/>';
		
		echo '<p> <input type="submit" value"Play!"/> </p>';
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

