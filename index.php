<h1> Meu index </h1>

<?php

/*

includ: Adiciona um arquivo ao atual de forma independente, ou seja o arquivo funciona mesmo se o include não funcionar
include 'config.php';

require: Adiciona um arquivo ao atual de forma integrada, ou seja se o requere não funcionar o arquivo como um todo não funciona
_once: Faz com que o arquivo seja caregado apenas uma unica vez

*/

require_once 'system/config.php';
echo '</br>';
include 'helpers.php';

?>