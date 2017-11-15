<?php

namespace Kunstwerken;

//abstract: 
abstract class KunstwerkAbstract
{
    public $jaar;
    public $kunstenaar;
    public $titel;

    //__magic methods

    function __construct() 
    {
        // \ dient om naar de root van php zelf gaan om de dateTime te vinden
        $this->date = new \DateTime();
    }

    //op het moment dat je probeert toegang te krijgen tot iets dat niet bestaat worden deze twee functies aangeroepen
    //get of set
    //dit zijn accessors. 
    /*function __get() {

    }

    function __set() {

    }*/
}