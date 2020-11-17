<!-- #!/usr/bin/env php -->

<?php

require "vendor/autoload.php";

//Teste::metodo();
//exit();

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCursos\Buscador;

$client = new Client(['base_uri' => 'http://alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

?>

<table>

<?php foreach ($cursos as $curso) { ?>
    <?php //exibeMensagem($curso); ?>
    <tr><td><?php exibeMensagem($curso); ?></td></tr>
<?php } ?>

</table>