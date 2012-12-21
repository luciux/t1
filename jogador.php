<?php 
	
	include 'lib.php';
	
	$identificador = $_GET['id'];
	
	if(isset($_GET['selecao'])){
		$select = $_GET['selecao'];
		
		if($select == "1010"){
			$select = 'xis';
		}
		else{ 
			$select = 'xis';
		}
	}
	
	cabecalho('JOGADOR 2');
	
		echo "$identificador";
		echo "$select";
		
		echo'<form action="jogo.php" method="POST">';
		
			echo'<p>NAME(PLAYER 2)<input type="text" name="nomeJogador2"/></p>';
			
			echo '<input type="hidden" name="keyplayer2" value="'.$identificador.'" />';
			echo '<input type="hidden" name="selecao" value="'.$select.'" />';
		
			echo '<p> <input type="submit" value"Play!"/> </p>';
		
		echo'</form>';
	
	rodape();
?>