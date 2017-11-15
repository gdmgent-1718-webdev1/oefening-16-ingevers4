<?php

namespace Kunstwerken;

//extends = overerven van posts
class Film extends KunstwerkAbstract implements afbeeldingInterface, duurInterface
{
    public $duur;
    public $afbeelding;

    public function getAfbeelding(): ?string {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }

    public function getDuur(): ?string {
        return $this->duur;
    }

    public function setDuur(string $duur): void {
        $this->duur = $duur;
    }
}