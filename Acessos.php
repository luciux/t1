<?php 
	
class Acessos{
	
	private $arquivo; // Arquivo Referencia
	private $valorAtual;
	private $pointerFile;
	private $ponteiro;
	
	public function numVisitas(){
		
		$arquivo = "files/ref.txt";
		
		if((file_exists($arquivo))){ // Testa se o arquivo existe e incrementa
			
			$pointerFile = fopen("$arquivo", "r");
			
			$valorAtual = chop(fgets($pointerFile)); // Funчуo chop tira espacos e \n a esquerda e direira da string && fgets lъ somente uma linha
			
			$valorAtual++; // incrementa numero de acessos a partida;
			
			fclose($pointerFile); // fecha o aquivo apos fazer as leituras necessarias
			
			$ponteiro = fopen("$arquivo", "w");
			
			if($ponteiro != NULL){ // Se criou arquivo escreve o valor nele..
				fwrite($ponteiro, $valorAtual);
				fclose($ponteiro);
			}
		}
		
		else{
			
			$valorAtual = 1;
			$ponteiro = fopen("$arquivo", "w");
			
			if($ponteiro != NULL){
				fwrite($ponteiro, $valorAtual);
				fclose($ponteiro);
			}
		}
		
		return $valorAtual;
	}
}
?>