<?php 

	session_start();
	include 'CriarArquivosJogadores.php';
	include'iniciaJogo.php';
	include 'lib.php';
	
	

	cabecalho('teste');
	
	echo'<p> Essa e uma pagina para teste se voce chegou ate aqui eh uma boa noticia';
	echo'<p>'.$_SESSION['selecao'].'</p>';
	
	
	if(leStatus(@$_SESSION['file']){	
		if(alterouMatriz($posicaoJogada)){
			
			$linha_coluna = explode('-', $posicaoJogada, 2);
			
			$caminho = $_SESSION['matriz'];
			
			$ponteiro = fopen($caminho, "w+");
				
			if($ponteiro != NULL){
				$arrayWords = fgtes($ponteiro);
				
				$indice = $posicaoJogada * 2;
				$arrayWords[$indice] = $_SESSION['indice'];
				
				fwrite($ponteiro, $arrayWords);
				
				$caracteres = explode(',', $arrayWords, 9);
				$aux = 0;
				for($i = 0; $i < 3; $i++){
					for($j = 0; $j < 3; $j++){
						
						matriz[$i][$j] = $caracteres[$aux];
						$aux++
					}
				}
				
				
				
				logicaJogo($linha_coluna, $_SESSION['selecao'], $matriz);
			}
		}
		
	}
	
	rodape();

?>