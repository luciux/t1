<?php 

	function aterouMatriz($posJogada){
		$caminho = $_SESSION['matriz'];
		
		if(file_exists()){
			
			$ponteiro = fopen($caminho, "r");
			
			if($ponteiro != NULL){
				$arrayWords = fgtes($ponteiro);
				
				matriz = explode(',', $arrayWords, 9);
				
				if(matriz[$posJogada] != 0)
					return false;
				else
					return true;
			}
		}
		
	}
	








	
	function comecaJogo(){
		
			
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
	}
?>