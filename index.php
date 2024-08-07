<?php

require_once 'system/config.php';
include 'helpers.php';
include 'classes/Menssagem.php';

echo hello('world');

$menssagem_1 = new Menssagem();

$menssagem_1 -> setTexto('testando o metodo');

var_dump( $menssagem_1 );

echo $menssagem_1 -> getTexto();