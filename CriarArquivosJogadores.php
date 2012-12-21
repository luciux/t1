<?php 
			
	function gravaArquivo1($nomeA, $jogador1, $status){
		
		if(file_exists($nomeA)){
			$ponteiro = fopen("$nomeA", "r+");
			fwrite($ponteiro, $jogador1.' '.$status);
			fclose($ponteiro);
		}
		else{
			$ponteiro = fopen("$nomeA", "w");
				
			if($ponteiro != NULL){
				fwrite($ponteiro, $status.'~'.$jogador1.'~'); //possicao 创2创 fica a se player 1 esta ativo ou nao... posicao 创5创testa se player 2 esta ativo ou nao.
				fclose($ponteiro);
			}
		}	
	}
	
	function gravaArquivo2($nomeA, $jogador2, $status){
	
		if(file_exists($nomeA)){
			$ponteiro = fopen("$nomeA", "a+");
			fwrite($ponteiro, $status.'~'.$jogador2);
			fclose($ponteiro);
			return true;
		}
		else{
			return false;
		}
	}
	
	function criaMatriz($nomeArquivo){
		
		$matriz = '0,0,0,0,0,0,0,0,0';
		
		if(file_exists($nomeArquivo)){
			
			$ponteiro = fopen($nomeArquivo, "w");
			fwrite($ponteiro, $matriz);
			fclose($ponteiro);
		}		
		else{
			$ponteiro = fopen("$nomeArquivo", "w");
			
			if($ponteiro != NULL){
				fwrite($ponteiro, $matriz);
				fclose($ponteiro);
			}
		}
	}
	
	function leStatus($arquivo){
		
		
		if(file_exists($arquivo)){
			$pointer = fopen($arquivo, "r");
			
			$arrayWords = fgets($pointer);
			
			$words = explode('~', $arrayWords, 6); //seis informacoes dos dois jogadores disponives aqui
			//print_r($words);
			if($words[0] == 'on'){
				echo"$words[0]";
				print_r($words);
				if($words[3] == 'on'){
					echo"$words[3]";
					return true;
					exit();
				}
				else{
					echo'falso no segundo';
					return false;
				}	
			}
			else{
				echo'falso no primeiro';
				return false;
			}	
		}	
	}
	
	function testaAtividade($caminho, $posicao){ // posicao do arquivo onde esta guardado a informacao do xis ou bolinha
	
		if(file_exists($caminho)){
		
			$ponteiro = fopen($caminho, "r+");
			
			if($ponteiro != NULL){
				$jogadores = fgets($ponteiro);
				$atividade = explode('~', $jogadores, 9);
				
				if($atividade[$posicao] == 1){
					
					return true;
				}
				else
					return false;
			}
			else
				return false;
		}
		else{
			return false;
		
		}	
	}
	
	function alterouMatriz($caminho, $posJogada){
		if(file_exists($caminho)){
				
			$ponteiro = fopen($caminho, "r");
				
			if($ponteiro != NULL){
				$palavras = fgets($ponteiro);
	
				$matriz = explode(',', $palavras, 9);
	
				if($matriz[$posJogada] != 0){
					return false;
					exit();
				}
				else{
					return true;
					exit();
				}
			}
			return false;
			exit();
		}
	
	}
?>