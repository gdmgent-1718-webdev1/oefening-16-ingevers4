<?php

namespace Kunstwerken;

//extends = overerven van posts
class Gedicht extends KunstwerkAbstract implements aantalWoordenInterface
{
    public $aantalWoorden;

    public function getAantalWoorden(): ?int {
        return $this->aantalWoorden;
    }

    public function setAantalWoorden(int $aantalWoorden): void {
        $this->aantalWoorden = $aantalWoorden;
    }
}