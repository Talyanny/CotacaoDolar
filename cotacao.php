
<?php  

$moeda = simplexml_load_file("http://developers.agenciaideias.com.br/cotacoes/xml");

	/*cota��o dolar*/
$cotacao = $moeda->dolar->cotacao;
$variacao = $moeda->dolar->variacao;

 echo " Ol� anderson, a cota��o do Dolar para hoje est�".$cotacao." com varia��o de: ".$variacao."<br>";	

	/*fim cota��o dolar*/

	
 ?>