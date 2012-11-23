<?php 
	
	class Logica{
		
		private $aux = 1;
		private $i = -1;
		private $j = -1;
		private $horizontal = 0;
		private $vertical = 0;
		private $diagonal_Princial = 0;
		private $diagonal_secundaria = 0; 
		private $parametro = 0;
		private $linha_Jogada = 0;
		private $coluna_Jogada = 0;
		private $count = 0;
		private $matriz_Jogo = array(array());
		
		
		public function setLinha($linha){
			
			$linha_Jogada = $linha;	
		}

		public function setColuna($coluna){
			
			$coluna_Jogada = $coluna;
		}
		
		public function setParametro($p){
			
			$parametro = $p;
		}
		
		public function setMatriz($m){
			
			$matriz_Jogo = $m;
		}

		 
		public function logicaJogo(){
			 
			while($i != $linha_Jogada){
				
				if($aux){ // Entra somente na primeira vez	
					$aux = 0;
					$i = $linha_Jogada;
				}
				
				if($i == $linha_Jogada){ // faz também somente na primeira iteração
					for($j = 0; $j < 3; $j++){ 
						if($matriz_Jogo[$i][$j] == $parametro){ // testa se forma três pontos alinhados na diagonal
							$horizontal++;	
						}
					}
					if(($linha_Jogada == $coluna_Jogada)){
						for($count = 0; $count < 3; $count++){
							for($j = 0; $j < 3; $j++){
								if(($count == $j) && ($matriz_Jogo[$count][$j] == $parametro)){
									$diagonal_Principal++;
								}
							}	
						}
					}
					if(($linha_Jogada == $coluna_Jogada) || ($linha_Jogada == 2 && $coluna_Jogada == 0) || ($linha_Jogada == 0 && $coluna_Jogada == 2)){
						
						for($count = 0; $count < 3; $count++){
							for($j = 2; $j >= 0; $j--){
								
								if((($count == 0 && $j == 2) && $matriz_Jogo[$count][$j] == $parametro) || (($count == 1 && $j == 1) && $matriz_Jogo[$count][$j] == $parametro ) || (($count == 2 && $j == 0) && $matriz_Jogo[$count][$j] == $parametro)){
									$diagonal_Secundaria++;
								}
							}
						}
					}		
				}
				
				if($matriz_velha[$i][$coluna_Jogada] == $parametro){
					$vertical++;
				}
				
				if($horizontal == 3 || $vertical == 3 || $diagonal_principal == 3 || diagonal_secundaria == 3){
					return 1;
				}
				
				else{
					$i++;
					if($i > 2){
						$i = 0;	
					}
				}	
			}
		
			return 0;
		}
	}
?>



