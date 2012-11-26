<?php 
	 
	function logicaJogo($linha_coluna, $parametro, $matriz_Jogo){
		$i = -1;
		$aux = 1;
		$horizontal = 0;
		$linha_Jogada = $linha_coluna[0];
		$coluna_Jogada = $linha_coluna[1];
		
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
?>



