<?php

    /***********************************************
     * Objetivo: Arquivo de funções matemáticas e poderá ser utilizado dentro do projeto
     * Autor: Nathalia
     * Data: 04/02/2022
     * Versão: 1.0
     ***********************************************/

    //Criando uma função para calcular as operações matemáticas
	function operacaoMatematica ($numero1, $numero2, $operacao)
	{
		//Declaraçã de variaveis locais da função
		$num1 = (double) $numero1;
		$num2 = (double) $numero2;
		$result = (double) 0;
		$tipoCalculo = (string) $operacao;

		switch ($tipoCalculo)
			{
				case "SOMAR":
					$result = $num1 + $num2;
					break;
				case "SUBTRAIR":
					$result = $num1 - $num2;
					break;
				case "MULTIPLICAR":
					$result = $num1 * $num2;
					break;
				case "DIVIDIR":
					if($num2 == 0)
						echo(ERRO_MSG_DIVISAO_ZERO);
					else
						$result = $num2 / $num2;

					break;
				
				default:
					//Processamento caso não entre em nenhuma das opções
			}

			$result = round($result, 2);
		
		return $result;
	}

?>