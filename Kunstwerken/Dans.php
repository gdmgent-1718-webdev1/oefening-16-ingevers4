<?php

namespace Kunstwerken;

//extends = overerven van posts
class Dans extends KunstwerkAbstract implements afbeeldingInterface
{
    public $afbeelding;

    public function getAfbeelding(): ?string {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }
}