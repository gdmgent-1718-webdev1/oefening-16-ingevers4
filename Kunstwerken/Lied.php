<?php

namespace Kunstwerken;

//extends = overerven van posts
class Lied extends KunstwerkAbstract implements duurInterface
{
    public $duur;

    public function getDuur(): ?string {
        return $this->duur;
    }

    public function setDuur(string $duur): void {
        $this->duur = $duur;
    }
}