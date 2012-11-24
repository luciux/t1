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
				fwrite($ponteiro, $status.'~'.$jogador1.'~');
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
			
			$words = explode('~', $arrayWords, 4);
			print_r($words);
			if($words[0] == 'on'){
				echo"$words[0]";
				print_r();
				if($words[2] == 'on'){
					echo"$words[2]";
					return true;
				}
			}
			else{
				return false;
			}	
		}	
	}
?>