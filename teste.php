<?php 

	session_start();
	include 'CriarArquivosJogadores.php';
	include 'Logica.php';
	include 'lib.php';
	
	if(isset($_GET['campo1'])){
		
		$campo = $_GET['campo1'];	
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo2'])){
		
		$campo = $_GET['campo2'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo3'])){
		
		$campo = $_GET['campo3'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo4'])){
		
		$campo = $_GET['campo4'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo5'])){
		$campo = $_GET['campo5'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo6'])){
		$campo = $_GET['campo6'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo7'])){
		$campo = $_GET['campo7'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo8'])){
		$campo = $_GET['campo8'];
		$nomePadrao = $_GET['nome'];
	}
	
	if(isset($_GET['campo9'])){
		$campo = $_GET['campo9'];
		$nomePadrao = $_GET['nome'];
	}

	
	cabecalho('teste');
	
	echo'<p> Essa e uma pagina para teste se voce chegou ate aqui eh uma boa noticia';
	echo'<p>'.$_SESSION['selecao'].'</p>';
	
	if($campo == 1){
		$linha_coluna[0] = 0;
		$linha_coluna[1] = 0;
		$posicaoJogada = $_GET['campo1'];
	}
	elseif($campo == 2){
		$linha_coluna[0] = 0;
		$linha_coluna[1] = 1;
		$posicaoJogada = $_GET['campo2'];
	}
	elseif($campo == 3){
		$linha_coluna[0] = 0;
		$linha_coluna[1] = 2;
		$posicaoJogada = $_GET['campo3'];
	}
	elseif($campo == 4){
		$linha_coluna[0] = 1;
		$linha_coluna[1] = 0;
		$posicaoJogada = $_GET['campo4'];
	}
	elseif($campo == 5){
		$linha_coluna[0] = 1;
		$linha_coluna[1] = 1;
		$posicaoJogada = $_GET['campo5'];
	}
	elseif($campo == 6){
		$linha_coluna[0] = 1;
		$linha_coluna[1] = 2;
		$posicaoJogada = $_GET['campo6'];	
	}
	elseif($campo == 7){
		$linha_coluna[0] = 2;
		$linha_coluna[1] = 0;
		$posicaoJogada = $_GET['campo7'];
	}
	elseif($campo == 8){
		$linha_coluna[0] = 2;
		$linha_coluna[1] = 1;
		$posicaoJogada = $_GET['campo8'];
	}
	elseif($campo == 9){
		$linha_coluna[0] = 2;
		$linha_coluna[1] = 2;
		$posicaoJogada = $_GET['campo9'];
	}
	
	if(leStatus(@$_SESSION['file'])){	
		echo'LEU STATUS';
		if(alterouMatriz(@$_SESSION['matriz'], ($campo-1))){ // campo - 1 
			
			if($_SESSION['selecao'] == 'bolinha'){
				if(testaAtividade($_SESSION['file'], 2)){
					if(file_exists($_SESSION['file'])){
						$ponteiro = fopen($_SESSION['file'], "r+");
						$mudaStatus = fgets($ponteiro);
						$palavra = explode('~',$mudaStatus, 6);
						$palavra[2] = 0;
						$palavra[5] = 1;
						$estruturada = $palavra[0].'~'.$palavra[1].'~'.$palavra[2].'~'.$palavra[3].'~'.$palavra[4].'~'.$palavra[5];
						$_SESSION['idJogador'] = 1;
						fclose($ponteiro);
					}
					$ponteiro = fopen($_SESSION['file'], "w+");	
					
					fwrite($ponteiro, $estruturada);
					fclose($ponteiro);
				}
			}
			
			elseif($_SESSION['selecao'] == 'xis'){
				if(testaAtividade($_SESSION['file'], 5)){
					if(file_exists($_SESSION['file'])){
						$ponteiro = fopen($_SESSION['file'], "r+");
						$mudaStatus = fgets($ponteiro);
						$palavra = explode('~',$mudaStatus, 6);
						$palavra[2] = 1;
						$palavra[5] = 0;
						$estruturada = $palavra[0].'~'.$palavra[1].'~'.$palavra[2].'~'.$palavra[3].'~'.$palavra[4].'~'.$palavra[5];$palavra[0].'~'.$palavra[1].'~'.$palavra[2].'~'.$palavra[3].'~'.$palavra[4].'~'.$palavra[5];
						$_SESSION['idJogador'] = 2;
						fclose($ponteiro);
					}
					$ponteiro = fopen($_SESSION['file'], "w+");	
					fwrite($ponteiro, $estruturada);
					fclose($ponteiro);
				}
			}
				
			if(isset($_SESSION['idJogador'])){
				
				$caminho = $_SESSION['matriz'];
				
				$ponteiro = fopen($caminho, "r+");
					
				if($ponteiro != NULL){
				
					$arrayWords = fgets($ponteiro);
					$pos = (2*($campo-1));
					$arrayWords[$pos] = $_SESSION['idJogador'];
					fclose($ponteiro);
				}
			
				$caracteres = explode(',', $arrayWords, 9);
				$aux = 0;
				
				for($i = 0; $i < 3; $i++){
					for($j = 0; $j < 3; $j++){
						
						$matriz[$i][$j] = $caracteres[$aux];
						$aux++;
					}
				}
								
				if((logicaJogo($linha_coluna, $_SESSION['idJogador'], $matriz))){
					if($_SESSION['idJogador'] == 1){
						
						echo'\n\n\nplayer1 win';
						unset($_SESSION['idJogador']);
						//AQUI PODE FAZER HEADER LOCATION PARA PAGINAS DE VITORIA E DERROTA
					}
					else
						echo'\n\nplayer2 win';
				}
				else{
					$ponteiroArquivo = fopen($caminho, "w+");
					unset($_SESSION['idJogador']);
					if($ponteiroArquivo != NULL){
						fwrite($ponteiroArquivo, $arrayWords);
						fclose($ponteiroArquivo);
						
						
						print_r($arrayWords); 
						echo'desviando';
						
						header('Location:tabuleiro.php');
					}
				}	
			}
		}
	}
	
	rodape();

?>