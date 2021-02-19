<?php

class Permissao{
    protected $nivel;

    protected function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getNivel()
    {
        return $this->nivel;
    }
}