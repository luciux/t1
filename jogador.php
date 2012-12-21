<?php 
	
	include 'lib.php';
	
	cabecalho('JOGADOR 2');
	
		$identificador = $_GET['id'];
		
		echo "$identificador";
		
		echo'<form action="jogo.php" method="POST">';
		
			echo'<p> NAME(PLAYER 2) <input type="text" name="nomeJogador2"/> </p>';
			
			echo '<input type="hidden" name="keyplayer2" value="'.$identificador.'" />';
		
			echo '<p> <input type="submit" value"Play!"/> </p>';
		
		echo'</form>';
	
	rodape();
?>