<?php 
	
	//include 'index.php';
	
	session_start();
	include 'Logica.php';
	include 'CriarArquivosJogadores.php'; 
	
	
	if(isset($_POST['selecao'])){
	
		$_SESSION['selecao'] = $_POST['selecao'];
	}
	
	// Vem o post do player 1 com o numero de acesso do mesmo...
	if((isset($_POST['keyplayer1'])) && isset($_POST['nomeJogador1'])){
		$_SESSION['nomeJogador1'] = $_POST['nomeJogador1'];
		$_SESSION['keyplayer1'] = $_POST['keyplayer1'];
		
		$arquivoPlayer1 = 'files/statsPlayers'.$_SESSION['keyplayer1'].'.txt';
		
		$matrizJogo = 'files/'.$_SESSION['keyplayer1'].'matriz.txt';
		$_SESSION['matriz'] = $matrizJogo;
		$_SESSION['ativo'] = 1; // para saber quem esta alterando a matriz;
		
		$_SESSION['file'] = $arquivoPlayer1;
		$varPlayer1 = $_SESSION['nomeJogador1'].'~1';
		
		gravaArquivo1($arquivoPlayer1, $varPlayer1, "on");
		
		criaMatriz($matrizJogo);
		header('Location:teste.php');
		
	}

	// Vem o post do player 2 com o numero de acesso do mesmo...
	if((isset($_POST['keyplayer2'])) && isset($_POST['nomeJogador2'])){
		$_SESSION['nomeJogador2'] = " ".$_POST['nomeJogador2'];
		$_SESSION['keyplayer2'] = $_POST['keyplayer2'];
		
		$matrizJogo = 'files/'.$_SESSION['keyplayer1'].'matriz.txt';
		
		$_SESSION['matriz'] = $matrizJogo;
		
		$arquivoPlayer2 = 'files/statsPlayers'.$_SESSION['keyplayer2'].'.txt';
		
		$_SESSION['ativo'] = 0;
		
		$_SESSION['file'] = $arquivoPlayer2;
		$varPlayer2 = $_SESSION['nomeJogador2'].'~0';
		
		gravaArquivo2($arquivoPlayer2, $varPlayer2, "on");
		
		echo''.$_SESSION['nomeJogador2'].'';
		header('Location:teste.php');
	}
?>