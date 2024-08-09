<?php

namespace system\classes;

class Menssagem
{
    private string $texto;

    public function getTexto(): string {
        return $this->texto;
    }

    public function setTexto(string $texto) {
        $this->texto = $texto;
    }
}