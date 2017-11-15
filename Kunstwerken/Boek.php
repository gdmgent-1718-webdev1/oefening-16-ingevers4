<?php

namespace Kunstwerken;

//extends = overerven van posts
class Boek extends KunstwerkAbstract implements aantalBladzijdenInterface, aantalWoordenInterface
{
    public $aantalBladzijden;
    public $aantalWoorden;

    public function getAantalBladzijden(): ?int {
        return $this->aantalBladzijden;
    }

    public function setAantalBladzijden(int $aantalBladzijden): void {
        $this->aantalBladzijden = $aantalBladzijden;
    }

    public function getAantalWoorden(): ?int {
        return $this->aantalWoorden;
    }

    public function setAantalWoorden(int $aantalWoorden): void {
        $this->aantalWoorden = $aantalWoorden;
    }
}