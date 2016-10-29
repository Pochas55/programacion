<?php
/*
include y require cargan códigos de archicvos externos, la diferencia radica en que cuando el archivo no se encuentra:
	include manda un warning y sigue ejecutando el script
	require manda un error fatal y detiene la ejecución del script
*/
//include('./PoligonoRegular.php');
require('./PoligonoRegular.php');
require('./Cuadrado.php');
require('./Rectangulo.php');
require('./Triangulo.php');
require('./Hexagono.php');


echo '
	<h1>Polígonos</h1>
	<p>Figura geométrica plana que está limitada por tres o más rectas y tiene tres o más ángulos y vértices.</p>
	<h2>Perímetro</h2>
	<p>El perímetro de un polígono es igual a la suma de las longitudes de sus lados.</p>
	<h2>Área</h2>
	<p>El área de un polígono es la medida de la región o superficie encerrada por un polígono.</p>
	<hr>
';
