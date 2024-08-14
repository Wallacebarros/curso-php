<?php

$sobre = function()
{
    return "pagina sobre";
};

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('system\controller');

SimpleRouter::get("curso-php/", 'SiteController@index'); 

SimpleRouter::get('curso-php/sobre', $sobre);

SimpleRouter::start();