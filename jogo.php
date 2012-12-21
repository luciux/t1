<?php 
	
	//include 'index.php';
	session_start();
	include 'logica.php';
	include 'CriarArquivosJogadores.php'; 
	
	
	if(isset($_POST['selecao'])){
	
		$_SESSION['selecao'] = $_POST['selecao'];
	}
	
	// Vem o post do player 1 com o numero de acesso do mesmo...
	if((isset($_POST['keyplayer1'])) && isset($_POST['nomeJogador1'])){
		$_SESSION['nomeJogador1'] = $_POST['nomeJogador1'];
		$_SESSION['keyplayer1'] = $_POST['keyplayer1'];
		
		
		$_SESSION['player1'] = $_POST['selecao'];
		
		$arquivoPlayer1 = 'files/statsPlayers'.$_SESSION['keyplayer1'].'.txt';
		
		$_SESSION['file'] = $arquivoPlayer1;
		$varPlayer1 = $_SESSION['nomeJogador1'];
		
		gravaArquivo1($arquivoPlayer1, $varPlayer1, "on");
		
		echo''.$varPlayer1.'';
	}

	// Vem o post do player 2 com o numero de acesso do mesmo...
	if((isset($_POST['keyplayer2'])) && isset($_POST['nomeJogador2'])){
		$_SESSION['keyplayer2'] = $_POST['keyplayer2'];
		
		$_SESSION['nomeJogador2'] = " ".$_POST['nomeJogador2'];
		
		$arquivoPlayer2 = 'files/statsPlayers'.$_SESSION['keyplayer2'].'.txt';
		$_SESSION['file'] = $arquivoPlayer2;
		
		$varPlayer2 = $_SESSION['nomeJogador2'];
		
		gravaArquivo2($arquivoPlayer2, $varPlayer2, "on");
		echo''.$_SESSION['keyplayer2'].'';
	}
	else{
		
		echo'zica';
	}
	
	
	if(leStatus(@$_SESSION['file'])){ // se existir o arquivo com o status do jogadores testa se estao okay
		if(0){
		
			if(isset($_SESSION['selecao'])){
			 	
			 	$_player1 = $_SESSION['selecao'];
			}
			 
			else{
		 	
		 		header('Location:index.php');
			 }
		 
		 	if($_player1 == 'bolinha'){
		 	
		 		$_player2 = 'xis';
		 	}
		 	
		 	$file = "files/" . $num . ".txt";
		 	$fileP = " files/" . $num . "jogadores.txt";
		 	
		 	if(file_exists($file && $fileP)){
		 		
		 		$pointer = fopen($file, "r");
		 		$playerPointer = fopen($fileP, "r");
		 		
		 		$matrizString = fgets($pointer);
		 		$statusPlayers = fgets($playerPointer);
		 		
		 		
		 		for($i = 0; $i < 3; $i++){
		 			
		 			for($j= 0; $j < 3; $j++){
		 				
		 			}
		 		}
		 	}
		 	
		 	else{
		 		
		 		$pointer = fopen($file, "w");
		 		$playerPointer = fopen($fileP, "w");
		 		
		 		for($i = 0; $i < 3; $i++){
		 			for($j = 0; $j < 3; $j++){
		 				
		 				$matriz[$i][$j] = 0;
		 			}
		 		}
		 		print_r ($matriz); 	
		 		
		 		if($pointer != NULL && $playerPointer){
					
		 			$statusPlayers = "p1,1;p2,0;";
		 			$matrizString = '0,0,0]0,0,0]0,0,0]';
		 			
		 			fwrite($playerPointer, $statusPlayers); 
		 			fwrite($pointer, $matrizString);
		 			fclose($pointer);
		 			fclose($playerPointer);
		 		}
		 		else{
		 			
		 			
		 		}
		 	}
		}
		else{
			$_SESSION['errop2'] = 'AINDA NA MESMA';
			
			echo'<p>'.$_SESSION['errop2'].'</p>';
			//header('Location:index.php');
		}
		
		echo'OKAY';
	}
?>